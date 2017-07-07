<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class loginController extends Controller
{

    public function create() {
        return view('auth.login');
    }

    public function store() {
        auth()->attempt(request(['klant_id', 'password']));

        $user = Auth::user();
        if($user->klant_id == 0) {
            return redirect('/register');
        }

        return redirect('/home');
    }


    public function destroy() {
        auth()->logout();

        return redirect('/');
    }
}
