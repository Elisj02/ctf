<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->surnames = 'Administrador';
        $user->email = 'admin@gmail.com';
        $user->email_verified_at = now();
        $user->username = 'admin';
        $user->role = 'admin';
        $user->icon = 'admin.png';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'user';
        $user->surnames = 'Usuario';
        $user->email = 'usuario@gmail.com';
        $user->email_verified_at = now();
        $user->username = 'user';
        $user->role = 'user';
        $user->icon = 'user.png';
        $user->password = Hash::make('usuario');
        $user->save();

        $user = new User();
        $user->id = 32;
        $user->name = 'user22';
        $user->surnames = 'Usuario22';
        $user->email = 'user@gmail.com';
        $user->email_verified_at = now();
        $user->username = 'user2';
        $user->role = 'user';
        $user->icon = 'user.png';
        $user->password = Hash::make('user12345');
        $user->save();

    }
}
