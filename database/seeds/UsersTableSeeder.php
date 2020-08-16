<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => '開発者',
                'role' => 'admin',
                'email' => 'admin@example.com',
                'password' => 'admin'
            ],
            [
                'name' => '管理職',
                'role' => 'manager',
                'email' => 'manager@example.com',
                'password' => 'manager'
            ],
            [
                'name' => '一般社員',
                'role' => 'employee',
                'email' => 'employee@example.com',
                'password' => 'employee'
            ]
        ];
    
        foreach ($users as $user) {
    
            \App\User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
                'password' => $user['password']
            ]);
    
        }
    }
}
