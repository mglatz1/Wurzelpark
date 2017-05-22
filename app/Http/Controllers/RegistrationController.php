<?php

namespace App\Http\Controllers;

use App\User;
use Validator;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        // validate input
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:4|confirmed',
            'year_of_birth' => 'required|integer|digits_between:4,4|max:2016|min:1900'
        ]);

        // validate username separately for uniqueness
        $username_validation = Validator::make(['username' => request('username')], ['username' => 'unique:users']);
        if($username_validation->fails())
        {
            return redirect('/register')
                ->withErrors("Registrierung fehlgeschlagen. Dieser Benutzername wird bereits verwendet, bitte wähle einen anderen.")
                ->withInput();
        }

        // create user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'year_of_birth' => request('year_of_birth'),
            'language' => request('language'),
            'username' => request('username')
        ]);

        // login user
        auth()->login($user);

        return redirect()->intended('/')->with('success', 'Du wurdest erfolgreich registriert.');
    }
}
