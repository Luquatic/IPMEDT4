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
                'message' => 'Verkeerde klantnummer en/of code'
            ]);
        }

        return redirect('/home');
    }

    protected function authenticated($request, $user){
        if($user->klant_id === 0){
            return redirect()->intended('/register'); //redirect to admin panel
        }

        return redirect()->intended('/home'); //redirect to standard user homepage
    }

    public function destroy() {
        auth()->logout();

        return redirect('/');
    }
}
