<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ConfigSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RolesSeeder::class);

        $role = Role::where('name', '=', 'admin')->first();
        $permissions = Permission::all();
        $role->syncPermissions($permissions);

        if (User::count() == 0) {
            $user = User::create([
                'name' => 'Hiến',
                'email' => 'anhhienbadao@gmail.com',
                'password' => Hash::make('Ahiendam123'),
            ]);
            $user->assignRole('admin');
        }

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(PostSeeder::class);
    }
}