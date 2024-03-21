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
        Schema::create('oportunidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_oportunidad', 45);
            $table->decimal('monto', 14, 2);
            $table->date('fecha_cierre');
            $table->tinyInteger('estatus');
            $table->text('notas')->nullable();
            $table->unsignedBigInteger('prospectos_id');
            $table->foreign('prospectos_id')->references('id')->on('prospectos');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oportunidades');
    }
};
