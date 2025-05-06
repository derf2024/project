<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        // Disable FK checks so truncate works even if users are referenced elsewhere
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Insert your default users
        DB::table('users')->insert([
            [
                'name'       => 'Admin User',
                'email'      => 'admin@example.com',
                'password'   => Hash::make('password'),
                'role_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Regular User',
                'email'      => 'user@example.com',
                'password'   => Hash::make('password'),
                'role_id'    => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Guest User',
                'email'      => 'guest@example.com',
                'password'   => Hash::make('password'),
                'role_id'    => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
