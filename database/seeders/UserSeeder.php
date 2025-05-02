<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'  => 'Developer',
            'email' => 'dev@mail.com',
            'password' => '123',
            'email_verified_at' => now()
        ]);
    }
}
