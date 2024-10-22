<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function commandcreate(Request $request)
    {
        $roles = ['admin', 'editor', 'writer', 'user'];
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
    public function addpermission(Request $request)
    {
        $role = Role::where('name', '=', 'admin')->first();
        $permissions = Permission::all();

        $data_check = $role->syncPermissions($permissions);
        dd($data_check);
    }
    public function useraddrole(Request $request)
    {
        $user = User::find(1);
        $user->assignRole(2);
    }
    public function getAllPermissions()
    {
        $user = User::find(1);
    }
}