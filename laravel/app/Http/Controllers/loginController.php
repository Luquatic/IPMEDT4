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

    protected function authenticated(Request $request, $user){
        if($user->klant_id === 0){
            return redirect('/register'); //redirect to register panel
        }

        return redirect('/home'); //redirect to homepage
    }

    public function destroy() {
        auth()->logout();

        return redirect('/');
    }
}
