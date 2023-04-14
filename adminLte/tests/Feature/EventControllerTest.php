<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class EventControllerTest extends TestCase
{
    use DatabaseTransactions;
    use InteractsWithDatabase;

    /** @test */
    public function index_displays_events()
    {
        $event1 = Event::factory()->create(['nombre' => 'Evento 1']);
        $event2 = Event::factory()->create(['nombre' => 'Evento 2']);

        $response = $this->get(route('eventos.index'));

        $response->assertOk();
        $response->assertSeeInOrder([$event1->nombre, $event2->nombre]);
    }

    /** @test */
    public function create_displays_the_create_form()
    {
        $response = $this->get(route('eventos.create'));
        $response->assertOk();
        $response->assertViewIs('eventos.create');
    }

    /** @test */
    public function edit_displays_the_edit_form()
    {
        $event = Event::factory()->create();
        $response = $this->get(route('eventos.edit', $event));
        $response->assertOk();
        $response->assertViewIs('eventos.edit');
        $response->assertViewHas('evento', $event);
    }

    /** @test */
    public function show_displays_event()
    {
        $event = Event::factory()->create();

        $response = $this->get(route('eventos.show', $event->id));

        $response->assertOk();
        $response->assertViewIs('eventos.show');
        $response->assertViewHas('evento', $event);
    }

}
