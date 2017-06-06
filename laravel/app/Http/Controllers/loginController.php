<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
//    public function __construct() {
//        $this->middleware('guest', ['except' => 'destroy']);
//    }

    public function create() {
        return view('auth.login');
    }

    public function store() {
        if (! auth()->attempt(request(['id', 'wachtwoord']))) {
            return back()->withErrors([
                'message' => 'Verkeerde inlog gegevens'
            ]);
        }

        return redirect('/home');
    }

    public function destroy() {
        auth()->logout();

        return redirect('/home');
    }
}
