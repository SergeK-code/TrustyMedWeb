<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialitySeeder extends Seeder{
    public function run(): void{
        DB::table('specialities')->insert([
            'name' => 'dentist',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('specialities')->insert([
            'name' => 'cardiologist',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('specialities')->insert([
            'name' => 'pregnancy',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('specialities')->insert([
            'name' => 'general health',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
