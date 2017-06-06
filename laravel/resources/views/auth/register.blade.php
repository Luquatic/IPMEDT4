@extends('layouts.layout')

@section('content')
    <h1>Welkom bij</h1>

    <img src="/images/aid_logo.png">

    <form method="POST" action="/register">

        {{ csrf_field() }}

        <div class="formInput{{ $errors->has('id') ? ' has-error' : '' }}">
            <input type="text" name="id" placeholder="Klantnummer" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Klantnummer'"/>

            @if ($errors->has('id'))
                <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="formInput">
            <input type="text" name="voornaam" placeholder="Voornaam" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Voornaam'"/>
        </div>

        <div class="formInput">
            <input type="text" name="achternaam" placeholder="Achternaam" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Achternaam'"/>
        </div>

        <div class="formInput{{ $errors->has('wachtwoord') ? ' has-error' : '' }}">
            <input type="password" name="wachtwoord" placeholder="Code" required onfocus="this.placeholder =''" onblur="this.placeholder = 'Code'"/>

            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>

        <?php if(isset($fmsg)) { ?> <div class="alert alertFailure" role="alert"> <?php echo $fmsg; ?> </div> <?php } ?>

        <button class="btn btnRegister" type="submit">REGISTREREN</button>
    </form>
@endsection