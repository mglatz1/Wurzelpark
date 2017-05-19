<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/login')->with('status', "Du wurdest erfolgreich ausgeloggt.");
    }

    public function store()
    {
        if (!auth()->attempt(request(['username', 'password']))) {
            return back()->withErrors([
                'messege' => 'Bitte überprüfe deine Login-Daten.'
            ]);
        }
        return redirect()->intended('/');
    }
}
