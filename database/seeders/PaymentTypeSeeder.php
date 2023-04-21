<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTypeSeeder extends Seeder{
    public function run(): void{
        DB::table('payment_types')->insert([
            'payment_method' => 'VISA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payment_types')->insert([
            'payment_method' => 'Paypal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payment_types')->insert([
            'payment_method' => 'Cash',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
