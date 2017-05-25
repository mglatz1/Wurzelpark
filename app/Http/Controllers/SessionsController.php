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
        config(['app.locale' => auth()->user()->language]);
        auth()->logout();
        return redirect('/login')->with('success', __("messages.success_logout"));
    }

    public function store()
    {
        if (!auth()->attempt(request(['username', 'password']))) {
            return back()->with('error', __("messages.error_login"));
        }
        return redirect()->intended('/')->with('success', __("messages.success_login"));
    }
}
