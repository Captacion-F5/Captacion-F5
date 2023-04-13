<?php

namespace Tests\Feature;

use App\Http\Controllers\SchoolController;
use App\Models\School;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\Response;
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SchoolControllerTest extends TestCase
{
    public function testIndex()
{
    // Crear algunas escuelas en la base de datos
    $schools = School::factory()->count(3)->create();

    // Realizar una solicitud GET a la ruta del index
    $response = $this->get(route('school.index'));

    // Afirmar que la respuesta tenga un estado HTTP de 200 (OK)
    $response->assertStatus(200);

    // Afirmar que la respuesta contiene los nombres de todas las escuelas
    foreach ($schools as $school) {
        $response->assertSee($school->name);
    }

    // Afirmar que las escuelas se muestran en orden descendente por ID
    $response->assertSeeInOrder([
        $schools[2]->name,
        $schools[1]->name,
        $schools[0]->name,
    ]);
}

    /**
     * @test
     */
    public function testCreateSchool()
    {
        $schoolData = [
            'name' => 'Test School'
        ];

        $response = $this->post(route('school.store'), $schoolData);

        $response->assertStatus(Response::HTTP_FOUND)
            ->assertRedirect(route('school.index'))
            ->assertSessionHas('success', 'Se ha añadido una nueva escuela.');

        $this->assertDatabaseHas('school', $schoolData);
    }

    public function testStoreNewSchool()
{
    // Preparar los datos de entrada (en este caso, simplemente el nombre)
    $data = [
        'name' => 'Nueva Escuela',
    ];

    // Simular la solicitud HTTP POST con los datos de entrada
    $response = $this->post(route('school.store'), $data);

    // Verificar que se redirige correctamente después de crear la escuela
    $response->assertRedirect(route('school.index'));

    // Verificar que se muestra el mensaje de éxito después de crear la escuela
    $response->assertSessionHas('success', 'Se ha añadido una nueva escuela.');

    // Verificar que la escuela se ha creado en la base de datos
    $this->assertDatabaseHas('school', [
        'name' => 'Nueva Escuela',
    ]);
}

    //  /**
    //  * Test to show a school.
    //  *
    //  * @return void
    //  */
    // public function testShowSchool()
    // {
    //     // Create a school
    //     $school = School::factory()->create();

    //     // Make a GET request to the show endpoint for the school
    //     $response = $this->get(route('school.show', $school));

    //     // Assert that the response has a successful status code
    //     $response->assertStatus(200);

    //     // Assert that the response contains the school's name
    //     $response->assertSee($school->name);
    // }

    public function testDestroySchoolAndRedirectsToIndex()
    {
        // Arrange
        $school = School::factory()->create();
        $this->withoutMiddleware();
        $response = $this->delete(route('school.destroy', $school));

        // Act
        $response->assertRedirect(route('school.index'));

        // Assert
        $this->assertDatabaseMissing('school', ['id' => $school]);
    }


}
