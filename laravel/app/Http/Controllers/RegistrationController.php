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
            'password' => 'required'
        ]);

        $klant_id = \request('klant_id');
        $voornaam = \request('voornaam');
        $achternaam = \request('achternaam');
        $password = bcrypt(\request('password'));

        dd($klant_id, $voornaam, $achternaam, $password);
        
        //Create and save the user
        $klant = User::create([$klant_id, $voornaam, $achternaam, $password]);

        //Sign them in
        auth()->login($klant);

        //Redirect
        return redirect('/home');
    }
}
