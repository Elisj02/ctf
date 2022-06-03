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
        $user->points = 500;
        $user->totalPoints = 500;
        $user->gamesPlayed = 10;
        $user->gamesWon = 5;
        $user->icon = 'https://th.bing.com/th/id/R.2b9734237ff26feae10de87638ff87f1?rik=bZaPX2ubSBmzeA&pid=ImgRaw&r=0';
        $user->gameTime = '00:00:00';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'user';
        $user->surnames = 'Usuario';
        $user->email = 'user@gmail.com';
        $user->email_verified_at = now();
        $user->username = 'user';
        $user->role = 'user';
        $user->points = 0;
        $user->totalPoints = 0;
        $user->gamesPlayed = 0;
        $user->gamesWon = 0;
        $user->icon = 'https://cdn-icons-png.flaticon.com/512/206/206853.png';
        $user->gameTime = '00:00:00';
        $user->password = Hash::make('12345678');
        $user->save();

    }
}
