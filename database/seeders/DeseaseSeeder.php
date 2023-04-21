<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DeseaseSeeder extends Seeder{
    public function run(): void{
        for ($i=0; $i < 5; $i++) { 
            DB::table('deseases')->insert([
                'desease_name' => Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
