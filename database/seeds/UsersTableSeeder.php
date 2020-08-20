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
                'email' => 'admin@example.com',
                'role' => 'admin',
                'department' => '研究開発',
                'password' => Hash::make('secret123')
            ],
            [
                'name' => '管理職',
                'role' => 'manager',
                'department' => '営業',
                'email' => 'manager@example.com',
                'password' => Hash::make('secret123')
            ],
            [
                'name' => '一般社員',
                'role' => 'employee',
                'department' => '総務',
                'email' => 'employee@example.com',
                'password' => Hash::make('secret123')
            ]
        ];
    
        foreach ($users as $user) {
    
            \App\User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
                'department' => $user['department'],
                'password' => $user['password']
            ]);
    
        }
    }
}
