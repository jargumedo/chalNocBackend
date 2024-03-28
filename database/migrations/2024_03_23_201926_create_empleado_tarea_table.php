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
        Schema::create('empleado_tarea', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tarea_id");
            $table->foreign("tarea_id")->references("id")->on("tareas")->onDelete("cascade");

            $table->unsignedBigInteger("empleado_id");
            $table->foreign("empleado_id")->references("id")->on("empleados")->onDelete("cascade");
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado_tarea');
    }
};
