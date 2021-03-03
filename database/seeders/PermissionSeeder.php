<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminAppDashboard = Module::updateOrCreate(['name' =>  'Admin Dashboard','slug'    =>  'admin.dashboard']);
        Permission::updateOrCreate([
            'module_id' =>  $adminAppDashboard->id,
            'name'      =>  'Access Dashboard',
            'slug'      =>  'app.dashboard'
        ]);

        // Admin Role Management
        $adminAppRole = Module::updateOrCreate(['name' =>  'Role Management','slug'    =>  'role.management']);
        Permission::updateOrCreate([
            'module_id' =>  $adminAppRole->id,
            'name'      =>  'Access Role',
            'slug'      =>  'app.roles.index'
        ]);

        Permission::updateOrCreate([
            'module_id' =>  $adminAppRole->id,
            'name'      =>  'Create Role',
            'slug'      =>  'app.roles.create'
        ]);

        Permission::updateOrCreate([
            'module_id' =>  $adminAppRole->id,
            'name'      =>  'Edit Role',
            'slug'      =>  'app.roles.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' =>  $adminAppRole->id,
            'name'      =>  'Delete Role',
            'slug'      =>  'app.roles.destroy'
        ]);

        // User Management
        $adminAppUser = Module::updateOrCreate(['name' =>  'User Management', 'slug'    =>  'user.management']);
        Permission::updateOrCreate([
            'module_id' =>  $adminAppUser->id,
            'name'      =>  'Access User',
            'slug'      =>  'app.users.index'
        ]);

        Permission::updateOrCreate([
            'module_id' =>  $adminAppUser->id,
            'name'      =>  'Create User',
            'slug'      =>  'app.users.create'
        ]);

        Permission::updateOrCreate([
            'module_id' =>  $adminAppUser->id,
            'name'      =>  'Edit User',
            'slug'      =>  'app.users.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' =>  $adminAppUser->id,
            'name'      =>  'Delete User',
            'slug'      =>  'app.users.destroy'
        ]);

    }
}
