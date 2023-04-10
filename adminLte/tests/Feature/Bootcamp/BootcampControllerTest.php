<?php

namespace Tests\Feature;

use App\Models\Bootcamp;
use App\Models\School;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BootcampControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test para verificar que la vista index de bootcamps funciona correctamente.
     *
     * @return void
     */
    // public function testIndex()
    // {
    //     $bootcamp = Bootcamp::factory()->create();
    //     $response = $this->get(route('bootcamps.index'));
    //     $response->assertStatus(200);
    //     $response->assertSee($bootcamp->nombre);
    // }

    // /**
    //  * Test para verificar que se elimina correctamente un bootcamp.
    //  *
    //  * @return void
    //  */
    // public function testDestroy()
    // {
    //     $bootcamp = Bootcamp::factory()->create();
    //     $response = $this->delete(route('bootcamps.destroy', $bootcamp->id));
    //     $response->assertRedirect(route('bootcamps.index'));
    //     $this->assertDatabaseMissing('bootcamps', ['id' => $bootcamp->id]);
    // }
}
