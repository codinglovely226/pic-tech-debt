<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'              => 1,
                'name'            => 'Admin',
                'email'           => 'admin@local.test',
                'password'        => bcrypt('password'),
                'remember_token'  => null,
                'user_login_hash' => '',
                'user_phone'      => '',
                'user_job'        => 'SPI',
                'team_id'         => NULL,
            ],
            [
                'id'              => 2,
                'name'            => 'Site Admin',
                'email'           => 'site_admin@local.test',
                'password'        => bcrypt('password'),
                'remember_token'  => null,
                'user_login_hash' => '',
                'user_phone'      => '',
                'user_job'        => 'SPI',
                'team_id'         => NULL,
            ],
            [
                'id'              => 3,
                'name'            => 'User',
                'email'           => 'user@local.test',
                'password'        => bcrypt('password'),
                'remember_token'  => null,
                'user_login_hash' => '',
                'user_phone'      => '',
                'user_job'        => 'SPI',
                'team_id'         => NULL,
            ],
            [
                'id'              => 4,
                'name'            => 'Specialist',
                'email'           => 'specialist@local.test',
                'password'        => bcrypt('password'),
                'remember_token'  => null,
                'user_login_hash' => '',
                'user_phone'      => '',
                'user_job'        => 'Specialist',
                'team_id'         => NULL,
            ],
        ];

        User::insert($users);
    }
}
