<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientesEliminadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes_eliminados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ingrediente_id');
            $table->unsignedBigInteger('pedido_id');
            $table->timestamps();

            $table->foreign('ingrediente_id')->references('id')->on('ingredientes')->onDelete('cascade');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredientes_eliminados');
    }
}
