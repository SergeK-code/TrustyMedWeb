<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('phone')->nullable();
            $table->string('bio')->nullable();
            $table->integer('rating')->nullable();
            $table->boolean('is_available')->nullable();
            $table->integer('consultation_cost')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger("speciality_id")->unsigned();
            $table->timestamps();
            
            $table->foreign('speciality_id')->references('id')->on('specialities')->onDelete('cascade');
        });
    }

    public function down(): void{
        Schema::dropIfExists('doctors');
    }
};
