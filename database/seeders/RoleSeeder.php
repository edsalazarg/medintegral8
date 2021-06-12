<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::create(['name' => 'Admin']);
        $role_user  = Role::create(['name' => 'User']);

        Permission::create(['name' => 'users.index'])->assignRole($role_admin);
        Permission::create(['name' => 'auth.register'])->assignRole($role_admin);
    }
}
