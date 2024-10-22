<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Permission::count() == 0) {
            $perrmissions = ['post.create', 'post.edit', 'post.delete', 'post.view'];
            foreach ($perrmissions as $permission) {
                Permission::create(['name' => $permission]);
            }
        }
    }
}