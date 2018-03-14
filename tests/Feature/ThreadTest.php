<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadTest extends TestCase
{   
    use DatabaseMigrations;
    /** @test */
    public function a_user_can_browse_thread()
    {   

        $thread = factory('App\Thread')->create();

        $response = $this->get('/thread');
        $response->assertSee($thread->title);

    }

    /** @test */
    public function a_user_can_see_single_thread(){

        $thread = factory('App\Thread')->create();

        $response = $this->get('/thread/' . $thread->id);
        $response->assertSee($thread->title);
    }
}
