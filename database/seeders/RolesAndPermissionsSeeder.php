<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $admin = Role::create(['name' => 'admin']);
        $seller = Role::create(['name' => 'seller']);
        $buyer = Role::create(['name' => 'buyer']);

        // Create permissions
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'add services']);
        Permission::create(['name' => 'view dashboard']);

        // Assign permissions to roles
        $admin->givePermissionTo(['manage users', 'view dashboard']);
        $seller->givePermissionTo(['add services']);
        $buyer->givePermissionTo('view dashboard');
    }
}
