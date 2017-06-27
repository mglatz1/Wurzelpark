<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Utils\Utils;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function create()
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        return view('sessions.create');
    }

    public function destroy()
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        auth()->logout();
        return redirect()->route('login')->with('success', __("messages.success_logout"));
    }

    public function store()
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        if (!auth()->attempt(request(['username', 'password']))) {
            return back()->with('error', __("messages.error_login"));
        }

        // check if user has finished quiz already
        $user = User::find(auth()->id());
        app()->setLocale($user->language);
        if ($user->finished == true)
        {
            auth()->logout();
            return redirect()->route('register')->with('error', __('messages.success_quiz_already_finished'));
        }
        return redirect()->intended()->with('success', __("messages.success_login"));
    }
}
