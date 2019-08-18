<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimensionFechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimension_fechas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fecha_id')->nullable();
            $table->timestamp('fecha')->nullable();
            $table->string('dia')->nullable();
            $table->string('mes')->nullable();
            $table->string('año')->nullable();
            $table->string('segmento')->nullable();
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
        Schema::dropIfExists('dimension_fechas');
    }
}
