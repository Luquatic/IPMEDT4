@extends ('layouts.layout')

@section('content')

    <form method="POST" action="/">

        {!! csrf_field() !!}

        <div class="formInput">
            <input type="text" name="klant_id" placeholder="Klantnummer" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Klantnummer'"/>
        </div>

        <div class="formInput">
            <input type="password" name="password" placeholder="Code" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Code'"/>
        </div>

        <button class="btn btnLogin" type="submit">INLOGGEN</button>

    </form>
@endsection