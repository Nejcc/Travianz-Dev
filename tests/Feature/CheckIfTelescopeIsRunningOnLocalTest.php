<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckIfTelescopeIsRunningOnLocalTest extends TestCase
{
    /**
     * @test
     */
    public function check_if_telescope_is_on_local()
    {
        $response = $this->get('/telescope');

        $response->assertStatus(403);
    }
}
