<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class NewsletterController extends Controller
{
    /**
     * Subscribe a user to the newsletter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function subscribe(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        try {
            Newsletter::create($formFields);
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                flash('You already subscribed to our newsletter.');
                return back();
            }
        }

        flash('Thank you for your subscription.');

        return back();
    }
}
