<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PostTableSeeder extends Seeder {

    public function run()
    {
        factory(App\Post::class, 20)->create();
    }

}