@extends('layouts.layout')

@section('content')
    <h1>Welkom bij</h1>

    <img src="/images/aid_logo.png">

    <form method="POST" action="/register">

        {{ csrf_field() }}

        <div class="formInput">
            <input type="text" name="id" placeholder="Klantnummer" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Klantnummer'"/>
        </div>

        <div class="formInput">
            <input type="text" name="voornaam" placeholder="Voornaam" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Voornaam'"/>
        </div>

        <div class="formInput">
            <input type="text" name="achternaam" placeholder="Achternaam" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Achternaam'"/>
        </div>

        <div class="formInput">
            <input type="password" name="wachtwoord" placeholder="Code" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Code'"/>
        </div>

        @include('layouts.errors')

        <button class="btn btnRegister" type="submit">REGISTREREN</button>
    </form>
@endsection