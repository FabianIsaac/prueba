<?php

namespace App\Http\Controllers;

use App\Models\Modelo;

class ModelosController extends Controller
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
        return $this->success(Modelo::all());
    }
}
