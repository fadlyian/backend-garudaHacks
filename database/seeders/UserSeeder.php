<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'company']);
        $role3 = Role::create(['name' => 'user']);

        $user1 = User::create([
            'name' => 'ian',
            'email' => 'ian@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user1->assignRole($role2);

        $user2 = User::create([
            'name' => 'adam',
            'email' => 'adam@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $user2->assignRole($role2);

        $user3 = User::create([
            'name' => 'wili',
            'email' => 'wili@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $user3->assignRole($role3);

        $user4 = User::create([
            'name' => 'devan',
            'email' => 'devan@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $user4->assignRole($role3);


    }
}
