<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = 'user';

        $user = new User;
        $user->login = 'user';
        $user->password = bcrypt($password);
        $user->email = 'user@gmail.com';
        $user->save();
    }
}
