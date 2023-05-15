<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/api/regions/');
        $response->assertStatus(200);
    }

    public function test_store_participants(): void
    {
        $this->withHeaders(["X-header"=>"value"]);
        $response = $this->post("/api/regions/store",["label"=>"Centre"]);
        dd($response);
        //$response->assertStatus(200);

    }
}
