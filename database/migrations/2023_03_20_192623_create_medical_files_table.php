<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('medical_files', function (Blueprint $table) {
            $table->id();
            $table->string('medical_history')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->bigInteger("user_id")->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void{
        Schema::dropIfExists('medical_files');
    }
};
