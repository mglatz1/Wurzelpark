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
        $constants = "constants.".auth()->user()->language;
        auth()->logout();
        return redirect('/login')->with('success', config($constants.".success_logout"));
    }

    public function store()
    {
        $constants = "constants.".auth()->user()->language;

        if (!auth()->attempt(request(['username', 'password']))) {
            return back()->with('error', config($constants.".error_login"));
        }
        return redirect()->intended('/')->with('success', config($constants.".success_login"));
    }
}
