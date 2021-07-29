<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->BigIncrements('empleado_id');
            $table->string('nombre',60);
            $table->integer('fono');
            $table->string('correo')->unique();
            $table->string('cargo',60);
            $table->string('imagen');
            $table->unsignedBigInteger('area_id');

            $table->foreign('area_id')->references('area_id')->on('areas');
            //$table->foreignId('area_id')->constrained('areas');

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
        Schema::dropIfExists('empleados');
    }
}
