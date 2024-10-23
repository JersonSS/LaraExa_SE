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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id('mascota_id');

            $table->string('nombre',50);
            $table->string('raza',50);
            $table->string('especie',50);
            $table->integer('edad');
            $table->string('color',50);
            $table->enum('genero',["Hembra","Macho"]);
            $table->boolean('diagnostico')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
