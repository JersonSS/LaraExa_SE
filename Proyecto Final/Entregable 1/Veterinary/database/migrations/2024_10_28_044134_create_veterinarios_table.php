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
        Schema::create('veterinarios', function (Blueprint $table) {
            $table->id('veterinario_id');


            $table->integer('dni');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->integer('telefono');
            $table->string('especialidad',150);
            $table->string('correo',250);
            $table->date('fnacimiento')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinarios');
    }
};
