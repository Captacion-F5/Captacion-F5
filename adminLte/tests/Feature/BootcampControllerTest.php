<?php

namespace Tests\Feature;

use App\Models\Bootcamp;
use App\Models\School;

use Tests\TestCase;

class BootcampControllerTest extends TestCase
{
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

    public function test_store_bootcamp()
    {
        // Define los datos para crear un nuevo bootcamp
        $data = [
            'nombre' => 'Nuevo Bootcamp',
            'inicio' => '2023-04-15',
            'school_id' => 1,
        ];

        // Envía una petición POST para crear un nuevo bootcamp
        $response = $this->post(route('bootcamps.store'), $data);

        // Verifica que el bootcamp se haya creado correctamente
        $response->assertRedirect(route('bootcamps.index'));
        $this->assertDatabaseHas('bootcamp', $data);
    }

    // public function test_show_method()
    // {
    //     // Crear una instancia de Bootcamp
    //     $bootcamp = Bootcamp::factory()->create();

    //     // Llamar al método show con el id del Bootcamp
    //     $response = $this->get(route('bootcamps.index', $bootcamp));

    //     // Verificar que la respuesta tenga el código HTTP 200
    //     $response->assertOk();

    //     // Verificar que la vista cargada tenga el Bootcamp
    //     $response->assertViewHas('bootcamp', $bootcamp);
    // }

    public function test_edit_bootcamp()
    {
        $bootcamp = Bootcamp::factory()->create();

        $response = $this->get(route('bootcamps.edit', $bootcamp));

        $response->assertStatus(200)
            ->assertViewIs('bootcamps.edit')
            ->assertViewHas('bootcamp', $bootcamp);
    }



// public function testUpdate()
// {
//     $bootcamp = Bootcamp::factory()->create();

//     $response = $this->put(route('bootcamps.update', $bootcamp), [
//         'nombre' => 'Nuevo nombre',
//         'inicio' => '2023-04-15',
//         'school_id' => $bootcamp->school_id,
//     ]);

//     $response->assertRedirect(route('bootcamps.index'))
//         ->assertSessionHas('success', 'Bootcamp actualizado exitosamente.');

//     $updatedBootcamp = Bootcamp::find($bootcamp);

//     $this->assertEquals('Nuevo nombre', $updatedBootcamp->nombre);
//     $this->assertEquals('2023-04-15', $updatedBootcamp->inicio);
//     $this->assertEquals(1, $updatedBootcamp->school_id);
// }


}
