<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Multas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multas', function (Blueprint $table) {
            $table->id();
            $table->string('patente', 10)->nullable(false);
            $table->string('vehiculo', 255)->nullable(false);
            $table->integer('valor_permiso')->default(0);
            $table->integer('interes_y_reajuste')->default(0);
            $table->integer('registro_de_multas_impagas')->default(0);
            $table->integer('subtotal')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
