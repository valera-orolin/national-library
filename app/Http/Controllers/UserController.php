<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Show the user registration form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('users.register');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param   \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        $defaultRole = Role::where('name', 'user')->first();
        $user->roles()->attach($defaultRole);

        $user->sendEmailVerificationNotification();

        auth()->login($user);

        flash('User has been created and logged in. Please verify your email.');

        return redirect('/');
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        flash('User has been logged out.');

        return back();
    }

    /**
     * Handle ab authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(Request $request) 
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($formFields)) {
            
            $request->session()->regenerate();

            flash('User has been logged in');

            return redirect('/');
        }

        return back();
    }

    /**
     * Mark the authenticated user's email as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(Request $request) 
    {
        $request->user()->markEmailAsVerified();
        return redirect('/');
    }
}
