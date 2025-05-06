<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
   public function run(): void
   {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('roles')->insert([
            [
                'id'         => 1,
                'role_name'  => 'Admin',   
                'url'        => '/admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'         => 2,
                'role_name'  => 'User',
                'url'        => '/user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'         => 3,
                'role_name'  => 'Guest',
                'url'        => '/guest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}