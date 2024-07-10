<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id('id')->primaryKey();
            $table->date('entrega_f');
            $table->date('devolucion_f');
            $table->string('observacion');
            $table->foreignId('libro_id')->nullable()->constrained('libros','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('usuario_id')->nullable()->constrained('usuarios','id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        DB::statement('ALTER SEQUENCE prestamos_id_seq RESTART WITH 1000');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
