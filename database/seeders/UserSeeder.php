<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@email.ru',
            'password' => Hash::make('123456'),
            'id_role' => 1
        ]);

        User::create([
            'name' => 'editor',
            'email' => 'editor@email.ru',
            'password' => Hash::make('123456'),
            'id_role' => 2
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@email.ru',
            'password' => Hash::make('123456'),
            'id_role' => 3
        ]);
    }
}
