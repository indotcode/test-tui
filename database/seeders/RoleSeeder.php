<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * @var \string[][]
     */
    private $role_result = [
        [
            'name' => 'Администратор',
            'key' => 'admin'
        ],
        [
            'name' => 'Редактор',
            'key' => 'editor'
        ],
        [
            'name' => 'Пользователь',
            'key' => 'user'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->role_result as $val){
            Role::create($val);
        }
    }
}
