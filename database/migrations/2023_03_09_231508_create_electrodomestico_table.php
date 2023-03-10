<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectrodomesticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electrodomestico', function (Blueprint $table) {
            $table->string("codigo",30);
            $table->string("descripcion",200);
            $table->string("tipoElectrodomestico",80);
            $table->double("precio",15,2);
            $table->double("ISV",15,2);
            $table->double("total",15,2);
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
        Schema::dropIfExists('electrodomestico');
    }
}
