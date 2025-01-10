<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [

            [
                'name' => 'Luciel Filho',
                'email' => 'lucielfilho@hotmail.com',
                'password' => bcrypt('Lu12lu12@')
            ]
        ];


        foreach ($users as $user) {
            User::create($user);
        }
    }
}
