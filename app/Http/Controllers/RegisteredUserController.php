<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;


class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {

        $attributes = request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(5), 'confirmed'], // name of confirmation field must be 'password_confirmation'
        ]);


        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/');
    }
}
