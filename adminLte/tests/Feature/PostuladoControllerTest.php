<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostuladoControllerTest extends TestCase
{
    public function test_index_postulado()
    {
        $response = $this->get('postulado');

        $response->assertStatus(200);

    }

}
