<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\User;
use App\Models\User as ModelsUser;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsUser::create([
            'name' => 'admin',
            'email' =>'admin@gmail.com',
            'password' => 'nanda123', // password
            'role_id' => '2'
        ]);
    }
}
