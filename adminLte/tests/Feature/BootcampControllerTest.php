<?php

namespace Tests\Feature;

use App\Models\Bootcamp;
use App\Models\School;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class BootcampControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @test
     */
    // public function can_display_list_of_bootcamps()
    // {
    //     $bootcamps = Bootcamp::factory()->count(3)->create();

    //     $response = $this->get(route('bootcamps.index'));

    //     $response->assertSuccessful();
    //     $response->assertViewIs('bootcamps.index');
    //     $response->assertViewHas('bootcamps');

    //     $viewBootcamps = $response->original->getData()['bootcamps'];
    //     $this->assertCount(3, $viewBootcamps);
    //     $this->assertEquals($bootcamps->pluck('id')->toArray(), $viewBootcamps->pluck('id')->toArray());
    // }

    // /**
    //  * @test
    //  */
    // public function can_display_create_bootcamp_form()
    // {
    //     $response = $this->get(route('bootcamps.create'));

    //     $response->assertSuccessful();
    //     $response->assertViewIs('bootcamps.create');
    //     $response->assertViewHas('schools');
    // }

    // /**
    //  * @test
    //  */
    // public function can_store_bootcamp()
    // {
    //     $school = School::factory()->create();

    //     $response = $this->post(route('bootcamps.store'), [
    //         'nombre' => $this->faker->sentence(2),
    //         'inicio' => $this->faker->dateTime(),
    //         'school_id' => $school,
    //     ]);

    //     $response->assertStatus(Response::HTTP_FOUND);
    //     $response->assertRedirect(route('bootcamps.index'));
    //     $this->assertDatabaseHas('bootcamps', [
    //         'nombre' => $response->original->nombre,
    //         'inicio' => $response->original->inicio,
    //         'school_id' => $response->original->school_id,
    //     ]);
    // }

    // /**
    //  * @test
    //  */
    // public function can_display_edit_bootcamp_form()
    // {
    //     $bootcamp = Bootcamp::factory()->create();

    //     $response = $this->get(route('bootcamps.edit', $bootcamp));

    //     $response->assertSuccessful();
    //     $response->assertViewIs('bootcamps.edit');
    //     $response->assertViewHas('bootcamp');
    // }

    // /**
    //  * @test
    //  */
    // public function can_update_bootcamp()
    // {
    //     $bootcamp = Bootcamp::factory()->create();
    //     $school = School::factory()->create();

    //     $response = $this->put(route('bootcamps.update', $bootcamp), [
    //         'nombre' => $this->faker->sentence(2),
    //         'inicio' => $this->faker->dateTime(),
    //         'school_id' => $school,
    //     ]);

    //     $response->assertStatus(Response::HTTP_FOUND);
    //     $response->assertRedirect(route('bootcamps.index'));
    //     $this->assertDatabaseHas('bootcamps', [
    //         'id' => $bootcamp,
    //         'nombre' => $response->original->nombre,
    //         'inicio' => $response->original->inicio,
    //         'school_id' => $response->original->school_id,
    //     ]);
    // }
}
