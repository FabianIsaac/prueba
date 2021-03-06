<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Multa;
use App\Models\Modelo;

class MultasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Retorna la lista de multas
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        //Cambio de ultimo minuto, se puede optimizar
        $multas = Multa::all();
        for($index = 0; $index < count($multas); $index++){
            $modelo = Modelo::where('id', $multas[$index]->vehiculo)->first();
            $multas[$index]->vehiculo = $modelo->vehiculo;
        }

        return $this->success($multas);
    }

    /**
     * Crea en BD un nuevo registro de multa
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'patente' => 'required|max:10|min:6',
            'vehiculo' => 'required|integer',
            'interes_y_reajuste' => 'integer',
            'registro_de_multas_impagas' => 'integer',
            'subtotal' => 'integer'
        ];
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'integer' => 'El campo :attribute debe ser un valor entero.',
            'max' => ':attribute debe tener maximo 10 caracteres.',
            'min' => ':attribute debe tener minimo 6 caracteres.'
        ];
        $this->validate($request, $rules, $messages);

        $multa = Multa::where('patente', $request->get('patente'))->first();
        if($multa){
            $mensaje = sprintf(
                'Ya existe una multa asociada a la patente %s. Solo debe actualizar el valor de esta.',
                $request->get('patente')
            );
            return $this->error($mensaje, Response::HTTP_CONFLICT);
        }

        //Ajustamos los datos corrertamente
        $multa = $request->all();
        
        //Buscamos el valor del permiso en BD 
        $modelo = Modelo::where('id', $multa['vehiculo'])->first();
        $multa['valor_permiso'] = $modelo->valor_permiso;

        if($request->get('subtotal', 0) == 0){
            //En caso de venir sin subtotal, sumaremos los montos adeudados y los guarademos en el subtotal
            $subtotal = $multa['interes_y_reajuste'] + $multa['registro_de_multas_impagas'] + $multa['valor_permiso'];
            $multa['subtotal'] = $subtotal;
        }

        
        //Pasaremos a mayusculas algunos datos para tener un orden visual en BD
        $multa['patente'] = strtoupper($multa['patente']);
        $multa['vehiculo'] = strtoupper($multa['vehiculo']);

        $multa = Multa::create($multa);
        return $this->success($multa, Response::HTTP_CREATED);
    }

    /**
     * Muestra los datos de la multa asociados a una patente
     * @return Illuminate\Http\Response
     */
    public function show($patente)
    {
        $multa = Multa::where('patente', $patente)->first();
        if(!$multa){
            $mensaje = sprintf('No existe una multa registrada a la patente %s.', $patente);
            return $this->error($mensaje, Response::HTTP_NOT_FOUND);
        }

        return $this->success($multa);
    }


    /**
     * Actualiza el valor adeudado de una patente (pagar)
     * @return Illuminate\Http\Response
     */
    public function pay(Request $request, $patente){
        $rules = [
            'valor' => 'required|integer'
        ];
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'integer' => 'El campo :attribute debe ser un valor entero.',
        ];
        $this->validate($request, $rules, $messages);

        $multa = Multa::where('patente', $patente)->first();
        if(!$multa){
            $mensaje = sprintf(
                'No existe una multa asociada a la patente %s.',
                $request->get('patente')
            );
            return $this->error($mensaje, Response::HTTP_NOT_FOUND);
        }

        if($multa['subtotal'] < $request->get('valor')){
            $mensaje = sprintf(
                'No puede pagar mas de lo que se debe, deuda atual es $%s',
                $multa['subtotal']
            );
            return $this->error($mensaje, Response::HTTP_CONFLICT);
        }

        $tempValue = $request->get('valor');
        //Primero pagaremos el interes y si sobra dinero, pagaremos el registro de multa
        $tempInteres = $multa['interes_y_reajuste'];
        $multa['interes_y_reajuste'] = $multa['interes_y_reajuste'] - $tempValue;
        if($multa['interes_y_reajuste'] <= 0){
            $multa['interes_y_reajuste'] = 0;
            $tempValue = $tempValue - $tempInteres;
        }
        
        //Si quedo dinero pagaremos la multa impaga
        $tempMultas = $multa['registro_de_multas_impagas'];
        $multa['registro_de_multas_impagas'] = $multa['registro_de_multas_impagas'] - $tempValue;
        if($multa['registro_de_multas_impagas'] <= 0){
            $multa['registro_de_multas_impagas'] = 0;
            $tempValue = $tempValue - $tempMultas;
        }

        if($tempValue > 0){
            $multa['valor_permiso'] = $multa['valor_permiso'] - $tempValue;
        }
        
        //Recalculamos el subtotal
        $multa['subtotal'] = $multa['registro_de_multas_impagas'] + $multa['interes_y_reajuste'] + $multa['valor_permiso'];
        $multa->save();
        
        $modelo = Modelo::where('id', $multa['vehiculo'])->first();
        $multa['vehiculo'] = $modelo->vehiculo;
        return $this->success($multa);
    }


    /**
     * Actualiza el valor adeudado de una patente (multar)
     * @return Illuminate\Http\Response
     */
    public function penalize(Request $request, $patente){
        $rules = [
            'valor' => 'required|integer'
        ];
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'integer' => 'El campo :attribute debe ser un valor entero.',
        ];
        $this->validate($request, $rules, $messages);

        $multa = Multa::where('patente', $patente)->first();
        if(!$multa){
            $mensaje = sprintf(
                'No existe una multa asociada a la patente %s.',
                $request->get('patente')
            );
            return $this->error($mensaje, Response::HTTP_NOT_FOUND);
        }

        $multa['registro_de_multas_impagas'] = $multa['registro_de_multas_impagas'] + $request->get('valor');

        $multa['subtotal'] = $multa['registro_de_multas_impagas'] + $multa['interes_y_reajuste'] + $multa['valor_permiso'];
        $multa->save();
        
        return $this->success($multa);
    }

    /**
     * Actualiza una multa existente
     * Los valores deben enviarse en application/x-www-form-urlencoded
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $patente)
    {
        $rules = [
            'patente' => 'max:10|min:6',
            'vehiculo' => 'max:255',
            'valor_permiso' => 'integer',
            'interes_y_reajuste' => 'integer',
            'registro_de_multas_impagas' => 'integer',
            'subtotal' => 'integer'
        ];

        $this->validate($request, $rules);

        $multa = Multa::where('patente', $patente)->first();
        if(!$multa){
            $mensaje = sprintf(
                'No existe una multa asociada a la patente %s.',
                $request->get('patente')
            );
            return $this->error($mensaje, Response::HTTP_NOT_FOUND);
        }

        $multa['patente'] = $request->get('patente');
        $multa['vehiculo'] = $request->get('vehiculo');
        $multa['valor_permiso'] = $request->get('valor_permiso');
        $multa['interes_y_reajuste'] = $request->get('interes_y_reajuste');
        $multa['registro_de_multas_impagas'] = $request->get('registro_de_multas_impagas');
        $multa['subtotal'] = $request->get('subtotal');

        //Ajustamos los datos corrertamente
        if($request->get('subtotal', 0) == 0){
            //En caso de venir sin subtotal, sumaremos los montos adeudados y los guarademos en el subtotal
            $subtotal = $multa['interes_y_reajuste'] + $multa['registro_de_multas_impagas'];
            $multa['subtotal'] = $subtotal;
        }

        //Pasaremos a mayusculas algunos datos para tener un orden visual en BD
        $multa['patente'] = strtoupper($multa['patente']);
        $multa['vehiculo'] = strtoupper($multa['vehiculo']);

        $multa->save();
        return $this->success($multa);
    }

    /**
     * Elimina todo registro de una patente
     * @return Illuminate\Http\Response
     */
    public function destroy($patente)
    {
        $multa = Multa::where('patente', $patente)->first();
        if(!$multa){
            $mensaje = sprintf('No se encontraron registros de la patente %s.', $patente);
            return $this->error($mensaje, Response::HTTP_NOT_FOUND);
        }
        $multa->delete();

        return $this->success($multa);
    }
}
