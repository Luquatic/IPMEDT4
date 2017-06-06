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
            'klant_id' => 'required',
            'voornaam' => 'required',
            'achternaam' => 'required',
            'wachtwoord' => 'required'
        ]);

        //Create and save the user
        $klant = User::create(request(['klant_id', 'voornaam ', 'achternaam', 'wachtwoord']));

        //Sign them in
        auth()->login($klant);

        //Redirect
        return redirect('/home');
    }
}
