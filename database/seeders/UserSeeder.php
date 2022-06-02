<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@forumi.com',
            'password' => bcrypt('admin'),
            'avatar' => 'https://ui-avatars.com/api/?name=admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
