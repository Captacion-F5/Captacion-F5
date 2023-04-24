<?php

namespace Tests\Feature;

use App\Models\Bootcamp;
use App\Models\School;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tests\TestCase;

class BootcampControllerTest extends TestCase
{
    use HasFactory;
    public function test_index()
    {
        $bootcamp = Bootcamp::factory()->create();
        $school = School::factory()->create();
        $bootcamp->school()->associate($school)->save();

        $response = $this->get(route('bootcamps.index'));

        $response->assertStatus(200);

        $response->assertSee($school->name);

        $response->assertSee($bootcamp->nombre);
    }
    public function test_create_new_bootcamp()
    {
        $response = $this->get(route('bootcamps.create'));

        $response->assertStatus(200)
            ->assertViewIs('bootcamps.create')
            ->assertViewHas('schools');
    }

    public function it_can_create_a_new_bootcamp()
    {
        $school = School::factory()->create();

        $response = $this->post(route('bootcamps.store'), [
            'nombre' => 'Bootcamp de prueba',
            'inicio' => '2022-05-01',
            'school_id' => $school->id,
            'active' => true,
        ]);

        $response->assertRedirect(route('bootcamps.index'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('bootcamps', [
            'nombre' => 'Bootcamp de prueba',
            'inicio' => '2022-05-01',
            'school_id' => $school->id,
            'active' => true,
        ]);
    }


    public function test_edit_bootcamp()
    {
        $bootcamp = Bootcamp::factory()->create();

        $response = $this->get(route('bootcamps.edit', $bootcamp));

        $response->assertStatus(200)
            ->assertViewIs('bootcamps.edit')
            ->assertViewHas('bootcamp', $bootcamp);
    }

    public function testDestroy()
{
    $bootcamp = Bootcamp::factory()->create();
    $response = $this->delete(route('bootcamps.destroy', $bootcamp));
    $response->assertRedirect(route('bootcamps.index'));
}


}
