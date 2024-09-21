<?php
// app/Services/EventService.php

namespace App\Services;

use Carbon\Carbon;
use Spatie\GoogleCalendar\GoogleCalendar;
use Spatie\GoogleCalendar\Event;

class EventService
{
    protected $calendar;

    public function __construct(GoogleCalendar $calendar)
    {
        $this->calendar = $calendar;
    }

    function AddGooogelevent($data)
    {

        $event = new Event;

        $event->name = $data['name'];
        $event->description = $data['comments'];
        $event->startDateTime = $data['date'];
        $event->endDateTime = Carbon::now()->addHour();
        $event->addAttendee([
            'email' => $data['email'],
            'name' => $data['name'],
            'responseStatus' => 'needsAction',
        ]);

        $event->save();
        // dd($event);
        return True;
    }

    // Implement other methods like updateEvent, deleteEvent, getEvents, etc.
}
