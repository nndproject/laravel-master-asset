<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserTesting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = 'admin123';
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        /* Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'client']); 
        $role1->givePermissionTo('edit articles');
        $role1->givePermissionTo('delete articles');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('publish articles');
        $role2->givePermissionTo('unpublish articles');

        $role3 = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider */

        // create demo users
        $user = \App\User::create([
            'name' => '#nndproject User',
            'email' => 'test@gmail.com',
            'level' => 'User',
            'status' => 'Active',
            'password' => $password
        ]);
        $user->assignRole('client');

        $user = \App\User::create([
            'name' => '#nndproject Admin User',
            'email' => 'admin@gmail.com',
            'level' => 'Admin',
            'status' => 'Active',
            'password' => $password
        ]);
        $user->assignRole('admin');

        $user = \App\User::create([
            'name' => '#nndproject Super-Admin User',
            'email' => 'superadmin@gmail.com',
            'level' => 'Super Admin',
            'status' => 'Active',
            'password' => $password
        ]);
        $user->assignRole('super-admin');
    }
}
