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
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:4|confirmed',
            'year_of_birth' => 'required|integer|digits_between:4,4|max:2016|min:1900'
        ]);
        $username = ['username' => request('email') . request('year_of_birth')];
        $valid = Validator::make($username, ['username' => 'unique:users']);

        if($valid->fails())
        {
            return redirect('/register')
                ->withErrors("Registrierung fehlgeschlagen. Dieser Benutzer ist bereits registriert.")
                ->withInput();
        }

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'year_of_birth' => request('year_of_birth'),
            'language' => request('language'),
            'username' => request('email') . request('year_of_birth')
        ]);

        auth()->login($user);


        return redirect()->home();
    }
}
