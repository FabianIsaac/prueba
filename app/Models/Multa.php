<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patente',
        'vehiculo',
        'valor_permiso',
        'interes_y_reajuste',
        'registro_de_multas_impagas',
        'subtotal'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
