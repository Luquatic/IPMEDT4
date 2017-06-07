<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{

    public function create() {
        return view('auth.login');
    }

    public function store() {
        if (! auth()->attempt(request(['klant_id', 'password']))) {
            return back()->withErrors([
                'message' => 'Verkeerde inlog gegevens'
            ]);
        }

        return redirect('/home');
    }

    public function destroy() {
        auth()->logout();

        return redirect('/');
    }
}
