<?php

use App\Models\Bootcamp;


function bootcamp_event_find($bootcampId)
{
    $bootcamp = Bootcamp::find($bootcampId);
    $events = $bootcamp->event;
    return view('pages.general', compact('bootcamp', 'events'));
}
