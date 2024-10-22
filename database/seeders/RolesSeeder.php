<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Role::count() == 0) {
            $roles = ['admin', 'editor', 'writer', 'user'];
            foreach ($roles as $role) {
                Role::create(['name' => $role]);
            }
        }
    }
}