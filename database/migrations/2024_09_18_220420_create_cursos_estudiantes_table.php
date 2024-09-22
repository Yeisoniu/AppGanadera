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
        Schema::create('cursos_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("Curso_id");
            $table->foreign("Curso_id")->references("id")->on("cursos")->onDelete("cascade");
            $table->unsignedBigInteger("Estudiante_id");
            $table->foreign("Estudiante_id")->references("id")->on("estudiantes")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos_estudiantes');
    }
};
