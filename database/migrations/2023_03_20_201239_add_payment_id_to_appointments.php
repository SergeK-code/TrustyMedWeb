<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::table('appointments', function (Blueprint $table) {
            $table->bigInteger("payment_id")->unsigned();
            $table->foreign('payment_id')->references('id')->on('payment_types')->onDelete('cascade');
        });
    }

    public function down(): void{
        Schema::table('appointments', function (Blueprint $table) {
        });
    }
};
