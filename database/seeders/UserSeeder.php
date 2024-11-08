<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // 5 provider kullanıcısı ekleyin
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => 'Provider ' . $i,
                'email' => 'provider' . $i . '@example.com',
                'password' => Hash::make('provider' . str_pad($i, 2, '0', STR_PAD_LEFT)), // provider01, provider02 şeklinde parola
                'role' => 'provider', // provider rolü
            ]);
        }

        // 5 customer kullanıcısı ekleyin
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => 'Customer ' . $i,
                'email' => 'customer' . $i . '@example.com',
                'password' => Hash::make('customer' . str_pad($i, 2, '0', STR_PAD_LEFT)), // customer01, customer02 şeklinde parola
                'role' => 'customer', // customer rolü
            ]);
        }
    }
}
