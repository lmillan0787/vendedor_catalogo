<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_producto');
            $table->string('descripcion_producto');
            $table->integer('unidades_por_caja');
            $table->float('precio')->nullable();
            $table->float('iva')->nullable();
            $table->float('precio_con_iva')->nullable();
            $table->string('descuento_por_bultos')->nullable();
            $table->string('descuento_por_volumen')->nullable();
            $table->integer('imagen_id')->nullable();
            $table->integer('marca_id');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
