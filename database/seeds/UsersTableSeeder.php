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
        $user = App\User::create([
            'name' => 'coldfire',
            'email' => 'leandrouti@yahoo.com.br',
            'password' => bcrypt('coldfire'),
            'admin' => 1,
        ]);


        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/avatar.jpg',
            'about' => 'About coldfire',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
