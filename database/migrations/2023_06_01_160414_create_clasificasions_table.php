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
        Schema::create('clasificasions', function (Blueprint $table) {
            $table->id();            
            //$table->unsignedBigInteger('clasificasion_id');
            $table->string('numerotabla');
            $table->string('nombre'); 
            $table->string('slug')->unique();
       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clasificasions');
    }
};
