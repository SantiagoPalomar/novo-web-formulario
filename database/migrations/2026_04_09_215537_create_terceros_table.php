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
    Schema::create('terceros', function (Blueprint $table) {
        $table->id();
        $table->string('tipo_documento');
        $table->string('documento')->unique();
        $table->string('digito_verificacion')->nullable();
        $table->string('primer_nombre');
        $table->string('segundo_nombre')->nullable();
        $table->string('primer_apellido')->nullable();
        $table->string('segundo_apellido')->nullable();
        $table->string('direccion')->nullable();
        $table->string('telefono_uno')->nullable();
        $table->string('telefono_dos')->nullable();
        $table->string('email');
        $table->string('departamento')->nullable();
        $table->string('ciudad')->nullable();
        $table->boolean('activo')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terceros');
    }
};
