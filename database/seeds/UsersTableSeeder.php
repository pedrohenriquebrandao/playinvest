<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Administrador',
            'birth' => '2001-01-01',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        $admin->roles()->attach($adminRole);
    }
}
