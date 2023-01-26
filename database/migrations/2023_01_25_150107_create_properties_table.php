<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->integer('cedula')->unique();
            $table->text('encabezado');
            $table->string('nombre');
            $table->string('medida_norte');
            $table->decimal('norte_ml');
            $table->string('medida_sur');
            $table->decimal('sur_ml');
            $table->string('medida_este');
            $table->decimal('este_ml');
            $table->string('medida_oeste');
            $table->decimal('oeste_ml');
            $table->decimal('area');
            $table->string('codigo_catastral');
            $table->string('gravamenes');
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
        Schema::dropIfExists('properties');
    }
}
