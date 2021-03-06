<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'password'=>bcrypt('password'),
                'email_verified_at'=> now(),
                'role_id'=>1
            ],
            [
                'name'=>'Test',
                'email'=>'test@test.com',
                'password'=>bcrypt('password'),
                'email_verified_at'=> now(),
                'role_id'=>2
            ]
            );
    }
}
