<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DoctorSeeder extends Seeder{
    public function run(): void{
        for ($i=0; $i < 5; $i++) { 
            DB::table('doctors')->insert([
                'name' => Str::random(5),
                'bio' => Str::random(100),
                'is_available' => true,
                'phone' => Str::random(10),
                'rating' => rand(1, 5),
                'consultation_cost' => rand(1,100),
                'speciality_id' => rand(1, Speciality::all()->count()),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
