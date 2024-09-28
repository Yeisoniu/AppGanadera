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
        Schema::create('finca_propietario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Finca_id');
            $table->foreign('Finca_id')->references('id')->on('fincas')->onDelete('cascade');
            $table->unsignedBigInteger("Propietario_id");
            $table->foreign("Propietario_id")->references('id')->on('Propietarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finca_propietario');
    }
};
