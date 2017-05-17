@extends('layouts.app')

@section('content')

    <div classe="col-md-5">
        <h1>Login</h1>

        <form method="POST" action="/login">
            {{ csrf_field() }}

            <div id="form-group">
                <p>Dein <b>Benutzername</b> ist deine E-Mail Adresse und dein Geburtsjahr zusammengeschrieben. Zum Beispiel <b>max@mustermann.at1990</b>.</p>
            </div>
            <hr>
            <div class="form-group">
                <label for="username">Benutzername:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Passwort:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    @include('layouts.errors')
@endsection