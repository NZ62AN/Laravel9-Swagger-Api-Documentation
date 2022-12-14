<?php


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$z36ywfmFVUHHatkkcK3JNuLPczzpf1ghGp3u/yWCLP5Tvo7VJyFyS',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
