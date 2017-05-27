<?php

namespace App\Http\Controllers;

use App\User;

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
        return redirect()->route('login')->with('success', __("messages.success_logout"));
    }

    public function store()
    {
        if (!auth()->attempt(request(['username', 'password']))) {
            return back()->with('error', __("messages.error_login"));
        }

        // check if user has finished quiz already
        $user = User::find(auth()->id());
        if ($user->finished == true)
        {
            auth()->logout();
            return redirect()->route('register')->with('success', __('messages.success_quiz_already_finished'));
        }

        return redirect()->intended()->with('success', __("messages.success_login"));
    }
}
