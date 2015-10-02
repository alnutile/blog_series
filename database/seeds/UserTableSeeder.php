<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email      = env('ADMIN_USER');
        $password   = env('ADMIN_PASSWORD');


        factory(App\User::class)->create(['email' => $email, 'password' => bcrypt($password)]);
    }
}
