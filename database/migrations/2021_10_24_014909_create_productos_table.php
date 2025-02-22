<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('descripcion',200);
            $table->float('precio');
            $table->string('imagen',200);
            $table->unsignedBigInteger('stock');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('subcategoria_id');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('empresa_id')->on('empresas')->references('id')
                ->onDelete('cascade');
            $table->foreign('marca_id')->on('marcas')->references('id')
                ->onDelete('cascade');
            $table->foreign('subcategoria_id')->on('subcategorias')->references('id')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
