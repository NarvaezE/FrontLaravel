<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = new User();
        $user->name = 'Edgar';
        $user->lastname = 'Narvaez';
        $user->rol = 'Administrador';
        $user->phone_number = '6121118415';
        $user->email = 'en@gmail.com';
        $user->password = bcrypt('pass');
        $user->save();
    }
}
