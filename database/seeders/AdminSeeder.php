<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Seed the database with initial data.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
