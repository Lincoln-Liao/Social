<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TweetTest extends TestCase {
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_store(){
        $response = $this->withHeaders([
            'Authorization' => 'Bearer 1|rWolvOTmXSOwpnavd4YrWZBqkpiFBIBIiKxVIMtG',
        ])->post('/api_v1/tweet', ['content' => 'write something']);

        $response->assertStatus(200);
    }

}
