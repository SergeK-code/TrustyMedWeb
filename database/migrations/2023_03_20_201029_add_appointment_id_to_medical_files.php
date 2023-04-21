<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::table('medical_files', function (Blueprint $table) {
            $table->bigInteger("appointment_id")->unsigned();
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
        });
    }

    public function down(): void{
        Schema::table('medical_files', function (Blueprint $table) {
        });
    }
};
