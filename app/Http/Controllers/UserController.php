<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller {

    /**
     * User register page
     */
    public function create() {
        return view('users.registration');
    }

    public function store(UserStoreRequest $request) {
        // ! Need check multiple email

        $email = $request->input('email');
        if (User::where('email', $email)->exists())
            return back()->withErrors('Email already used');

        User::create($request->validated());

        return redirect()->route('auth.login');
    }
}
