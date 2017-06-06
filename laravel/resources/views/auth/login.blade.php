@extends ('layouts.layout')

@section('content')

    <h1>Welkom bij</h1>

    <img src="/images/aid_logo.png">

    <form method="POST" action="/">

        <div class="formInput">
            <input type="text" name="id" placeholder="Klantnummer" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Klantnummer'"/>
        </div>

        <div class="formInput">
            <input type="password" name="wachtwoord" placeholder="Code" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Code'"/>
        </div>

        @include('errors')
        <button class="btn btnLogin" type="submit">INLOGGEN</button>

    </form>
@endsection