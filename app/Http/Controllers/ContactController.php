<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;
use Carbon\Carbon;
use Spatie\GoogleCalendar\Event;

class ContactController extends Controller
{


    public function index()
    {
        return view('front.contact');
    }


    function AddGooogelevent($data)
    {
        // Parse start and end date times
        $startDateTime = Carbon::parse($data['date']);
        $endDateTime = $startDateTime->copy()->addHour(); // Example: end time one hour later
        // Create a new event instance
        $event = new Event;

        // Set event properties
        $event->name = $data['name'];
        $event->description = $data['comments'];
        $event->startDateTime = $startDateTime;
        $event->endDateTime = $endDateTime;

        // Add attendee
        $event->addAttendee([
            'email' => $data['email'],
            'name' => $data['name'],
            'responseStatus' => 'needsAction',
        ]);

        // Save the event
        try {
            $event->save();
            return true; // Event saved successfully
        } catch (\Exception $e) {
            // Handle any exceptions (optional)
            dd($e);
            return false; // Event failed to save
        }
    }
    public function store(StoreContactRequest $request)
    {
        // dd($request);

        // Save contact to database
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone_number = $request->input('phone_number');
        // $contact->date = $request->input('date');
        $contact->comments = $request->input('comments');
        $contact->save();
       $this->AddGooogelevent($contact);

         return redirect()->back()->with('success', 'Contact saved and event created in Google Calendar!');
    }
}
