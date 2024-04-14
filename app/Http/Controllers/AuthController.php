<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class AuthController extends Controller {
    public function index() {
        if (Auth::check()) {
            return view('rooms.index');
        }

        return view('users.login');
    }

    public function login(LoginFormRequest $request) {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->intended('rooms');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
