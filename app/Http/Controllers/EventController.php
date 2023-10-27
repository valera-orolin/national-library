<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the events.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('events.index', [
            'events' => Event::latest()->filter($request->all())->paginate(6)
        ]);
    }

    /**
     * Display the specified event.
     *
     * @param  Event  $event
     * @return \Illuminate\View\View
     */
    public function show(Event $event)
    {
        return view('events.show', [
            'event' => $event
        ]);
    }

    /**
     * Show the form for creating a new event.
     *
     * @return \Illuminate\View\View
     */
    public function create() 
    {
        return view('events.create');
    }

    /**
     * Store a newly created event in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) 
    {
        $formFields = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'place' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('img', 'public');
        }

        Event::create($formFields);
        
        flash('Event has been created.');

        return redirect('/events');
    }

    /**
     * Show the form for editing the specified event.
     *
     * @param  Event  $event
     * @return \Illuminate\View\View
     */
    public function edit(Event $event) 
    {
        return view('events.edit', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified event in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Event  $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Event $event)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'place' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('img', 'public');
            self::destroyImage($event);
        }

        $event->update($formFields);

        flash('Event has been updated.');

        return back();
    }

    /**
     * Remove the specified event from storage.
     *
     * @param  Event  $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Event $event)
    {
        self::destroyImage($event);
        $event->delete();
        flash('Event has been deleted.');
        return redirect('/events');
    }

    /**
     * Remove the image of the event from storage.
     *
     * @param  Event  $event
     */
    private static function destroyImage(Event $event) 
    {
        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }
    }
}
