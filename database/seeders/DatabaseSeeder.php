<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*$user = User::factory()->create([
            'name' => 'Uko Iheanyi',
            'email' => 'helives360@gmail.com'
        ]);*/
        User::find(1)->assignRole('admin');

       /* Role::create(['name' => 'admin', 'guard_name'=> 'web']);
        Role::create(['name' => 'editor', 'guard_name'=> 'web']);
        Role::create(['name' => 'viewer', 'guard_name'=> 'web']);

        $user->assignRole('admin');  // Assign role to a user*/
    }
}
