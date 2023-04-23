<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SchoolControllerTest extends TestCase
{

    public function test_index()
    {
        $response = $this->get('/school');

        $response->assertStatus(200);

    }

    public function test_create_new_school()
    {
        $response = $this->post(route('school.create'));

        $response->assertStatus(200)
            ->assertViewIs('school.create');

    }
}
