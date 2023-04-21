<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('deseases', function (Blueprint $table) {
            $table->id();
            $table->string('desease_name')->unique();
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('deseases');
    }
};
