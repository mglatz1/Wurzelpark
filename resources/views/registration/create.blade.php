@extends('layouts.app')

@section('content')

    @include('layouts.errors')

    <div class="form-group">
        <h1>Registrieren</h1>
        <hr>

        <div class="form-gropu">
            <p>Falls du schon einen Account hast, kannst du dich hier einloggen:</p>
            <a class="btn btn-primary" href="login">Login</a>
        </div>
        <hr>
        <div class="form-gropu">

            <form method="POST" action="/register">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="username">Benutzername:</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">E-Mail-Adresse:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Passwort:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Passwort bestätigen:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <label for="year_of_birth">Geburtsjahr:</label>
                    <input type="text" class="form-control" id="year_of_birth" name="year_of_birth" value="{{ old('year_of_birth') }}" required>
                </div>

                <div class="form-group">
                    <label for="language">Sprache:</label>
                    <select id="language" class="form-control" name="language" required autofocus>
                        <option value="de" {{ old('language')  == "de" ? "selected": "" }}>Deutsch</option>
                        <option value="en" {{ old('language')  == "en" ? "selected": "" }}>Englisch</option>
                        <option value="it" {{ old('language')  == "it" ? "selected": "" }}>Italienisch</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrieren</button>
                </div>
            </form>
        </div>
        <hr>
    </div>
@endsection