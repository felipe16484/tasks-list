<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User;
        $user1->name = 'Felipe';
        $user1->email = 'felipe.work018@gmail.com';
        $user1->password = Hash::make('1234');
        $user1->email_verified_at = now();
        $user1->save();

        $user2 = new User;
        $user2->name = 'Prueba';
        $user2->email = 'prueba@mail.com';
        $user2->password = Hash::make('1234');
        $user2->email_verified_at = now();     
        $user2->save();

    }
}
