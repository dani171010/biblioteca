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
        Schema::create('libros', function (Blueprint $table) {
            $table->id('id')->primaryKey();
            $table->string('titulo',50);
            $table->foreignId('autor_id')->constrained('autors','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('editorial_id')->constrained('editorials','id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('paginas',3);
            $table->date('publicacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
