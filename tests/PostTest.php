<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
    /**
     * @test
     */
    public function should_have_index()
    {
        $this->visit('/posts')->see('Posts');

        $this->assertResponseOk();

    }
}
