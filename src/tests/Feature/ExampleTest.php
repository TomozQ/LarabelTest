<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        // 準備

        // 実行
        $response = $this->get('/');

        // 検証
        $response->assertStatus(200);
    }

    /** @test */
    public function これはテストです。()
    {
        $this->assertTrue(true);
    }
}
