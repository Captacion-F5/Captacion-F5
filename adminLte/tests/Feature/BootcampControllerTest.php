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
        // Crea un Bootcamp y agrega una escuela asociada
        $bootcamp = Bootcamp::factory()->create();
        $school = School::factory()->create();
        $bootcamp->school()->associate($school)->save();

        // Hace una solicitud GET a la ruta index de BootcampController
        $response = $this->get(route('bootcamps.index'));

        // Verifica que la respuesta tenga un código de estado exitoso
        $response->assertStatus(200);

        // Verifica que la respuesta contenga el nombre de la escuela asociada al Bootcamp
        $response->assertSee($school->name);

        // Verifica que la respuesta contenga el nombre del Bootcamp
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
}
