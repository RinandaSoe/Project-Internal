<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'nama' => 'superadmin',
        ]);

        Role::create([
            'nama' => 'admin',
        ]);

        Role::create([
            'nama' => 'management',
        ]);

        Role::create([
            'nama' => 'sales',
        ]);

        Role::create([
            'nama' => 'accounting',
        ]);
    }
}
