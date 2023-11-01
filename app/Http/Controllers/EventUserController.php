<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventUserController extends Controller
{
    /**
     * Confirm the attendance of the authenticated user for the specified event.
     *
     * @param  Event  $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function confirmAttendance(Event $event) 
    {
        $existingEntry = EventUser::where('user_id', Auth::id())
                              ->where('event_id', $event->id)
                              ->first();

        if ($existingEntry) {
            flash('You already confirmed your attendance in this event.');
            return redirect()->back();
        }

        EventUser::create([
            'user_id' => Auth::id(),
            'event_id' => $event->id,
        ]);

        flash('Thank you! Have fun on this event!');

        return redirect()->back();
    }
}
