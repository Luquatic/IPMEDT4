<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store() {
        //Validate the form
        $this->validate(request(), [
            'klant_id' => 'required|integer',
            'voornaam' => 'required|string|regex:/^[a-zA-Z]+$/u|max:255',
            'achternaam' => 'required|string|regex:/^[a-zA-Z]+$/u|max:255',
            'password' => 'required|string|min:4|'
        ]);

        //Create and save the user
        $klant = User::create(request(['klant_id', 'voornaam', 'achternaam', 'password']));

        //Sign them in
        auth()->login($klant);

        //Redirect
        return redirect('/home');
    }
}
