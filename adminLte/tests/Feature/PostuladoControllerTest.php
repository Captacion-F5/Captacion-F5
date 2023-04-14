<?php

// namespace Tests\Feature;

// use Database\Factories\PostuladoFactory;
// use App\Models\Postulado;
// use Tests\TestCase;

// class PostuladoControllerTest extends TestCase
// {
//     // use RefreshDatabase;

//     /**
//      * @Given que existen algunos postulados registrados
//      */
//     public function queExistenAlgunosPostuladosRegistrados()
//     {
//         // Crear algunos postulados
//         Postulado::factory()->create([
//             'nombre' => 'Juan',
//             'mail' => 'juan@mail.com',
//             'telefono' => '123456789',
//             'url_perfil' => 'http://juan.com',
//         ]);
//         Postulado::factory()->create([
//             'nombre' => 'Pedro',
//             'mail' => 'pedro@mail.com',
//             'telefono' => '123456789',
//             'url_perfil' => 'http://pedro.com',
//         ]);
//     }

//     /**
//      * @When se realiza una solicitud GET al método index
//      */
//     public function seRealizaUnaSolicitudGETAlMetodoIndex()
//     {
//         // Hacer una solicitud GET al método index
//         $this->get('/postulado');
//     }

//     /**
//      * @Then se debe obtener una respuesta con código de estado :arg1 y con los postulados registrados
//      */
//     public function seDebeObtenerUnaRespuestaConCodigoDeEstadoYConLosPostuladosRegistrados($response)
//     {
//         // Verificar que la respuesta tiene un código de estado 200
//         $response = $this->get('/postulado');
//         $response->assertStatus(200);

//         // Verificar que la vista tiene los postulados creados
//         $response->assertSee('Juan');
//         $response->assertSee('Pedro');
//     }

//     public function testIndex()
//     {
//         $this->queExistenAlgunosPostuladosRegistrados();
//         $this->seRealizaUnaSolicitudGETAlMetodoIndex();
//         $this->seDebeObtenerUnaRespuestaConCodigoDeEstadoYConLosPostuladosRegistrados(200);
//     }
// }
