<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User; // Pastikan menggunakan model User Anda

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Buat permission
        Permission::create(['name' => 'all access']);

        // Buat roles admin dan berikan permission
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo('all access');

        // Buat roles kasir tanpa permission
        Role::create(['name' => 'kasir']);
        // Buat user dan berikan roles
        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('superadmin'),
        ]);
        $adminUser->assignRole('admin');

        $kasirUser = User::create([
            'name' => 'Kasir User',
            'email' => 'kasir@example.com',
            'password' => bcrypt('superkasir'),
        ]);
        $kasirUser->assignRole('kasir');
    }
}


