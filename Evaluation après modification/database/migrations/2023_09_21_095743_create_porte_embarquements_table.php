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
        if (!Schema::hasTable('porte_embarquements')) {
            Schema::create('porte_embarquements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->boolean('est_ouverte')->default(false);
            $table->integer('capacite_maximale');
            $table->timestamps();
        });
    }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porte_embarquements');
    }
};
