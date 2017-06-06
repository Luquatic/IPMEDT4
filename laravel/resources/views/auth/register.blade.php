@extends('layouts.layout')

@section('content')
    <form method="POST" action="/register">

        {{ csrf_field() }}

        <div class="formInput">
            <input type="text" name="klant_id" placeholder="Klantnummer" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Klantnummer'"/>
        </div>

        <div class="formInput">
            <input type="text" name="voornaam" placeholder="Voornaam" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Voornaam'"/>
        </div>

        <div class="formInput">
            <input type="text" name="achternaam" placeholder="Achternaam" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Achternaam'"/>
        </div>

        <div class="formInput">
            <input type="password" name="password" placeholder="Code" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Code'"/>
        </div>

        @include('layouts.errors')

        <button class="btn btnRegister" type="submit">REGISTREREN</button>
    </form>
@endsection