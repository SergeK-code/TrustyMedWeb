<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->boolean('attend')->nullable();
            $table->boolean('cancel')->nullable();
            $table->integer('cost')->nullable();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("doctor_id")->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    public function down(): void{
        Schema::dropIfExists('appointments');
    }
};
