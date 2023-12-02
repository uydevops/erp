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

        $testUser = [
            'name' => 'Uğurcan Yaş',
            'email' => 'uydevp@gmail.com',
            'password' => bcrypt('123456'),
        ];


        User::insert($testUser); //Tek bir kullanıcı oluşturmak için kullanılır. Çoklu için factory veya insert kullanılabilir.

    }
}
