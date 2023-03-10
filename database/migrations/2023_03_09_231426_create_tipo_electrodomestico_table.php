<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoElectrodomesticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_electrodomestico', function (Blueprint $table) {
            $table->string("codigo",30);
            $table->string("descripcion",200);
            $table->double("porcentajeISV",8,2);
            $table->primary("codigo");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_electrodomestico');
    }
}
