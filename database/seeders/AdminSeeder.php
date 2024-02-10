<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'role' => '1'
        ]);

        $manager = User::create([
            'name'=>'writer',
            'email'=>'manager@gmail.com.com',
            'password'=>bcrypt('password'),
            'role' => '2'
        ]);

        $developer = User::create([
            'name'=>'Developer',
            'email'=>'developer@gmail.com',
            'password'=>bcrypt('password'),
            'role' => '3'
        ]);

        $admin_role = Role::create(['name' => 'admin']);
        $manager_role = Role::create(['name' => 'manager']);
        $developer_role = Role::create(['name' => 'developer']);

       $permission = Permission::create(['name' => 'Post access']);
        $permission = Permission::create(['name' => 'Post edit']);
        $permission = Permission::create(['name' => 'Post create']);
        $permission = Permission::create(['name' => 'Post delete']);

        $permission = Permission::create(['name' => 'Role access']);
        $permission = Permission::create(['name' => 'Role edit']);
        $permission = Permission::create(['name' => 'Role create']);
        $permission = Permission::create(['name' => 'Role delete']);

        $permission = Permission::create(['name' => 'User access']);
        $permission = Permission::create(['name' => 'User edit']);
        $permission = Permission::create(['name' => 'User create']);
        $permission = Permission::create(['name' => 'User delete']);

        $permission = Permission::create(['name' => 'Permission access']);
        $permission = Permission::create(['name' => 'Permission edit']);
        $permission = Permission::create(['name' => 'Permission create']);
        $permission = Permission::create(['name' => 'Permission delete']);

        $permission = Permission::create(['name' => 'Mail access']);
        $permission = Permission::create(['name' => 'Mail edit']);

        
        $admin->assignRole($admin_role);
        $manager->assignRole($manager_role);
        $developer->assignRole($developer_role);


        $admin_role->givePermissionTo(Permission::all());
    }
}