<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_homepage_contains_empty_table(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee(__('No products found'));
    }
}
