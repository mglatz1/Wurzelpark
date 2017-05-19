@extends('layouts.app')

@section('content')

    @include('layouts.success')

    <div classe="col-md-5">
        <h1>Login</h1>
        <hr>

        <form method="POST" action="/login">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="username">Benutzername:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Passwort:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            @include('layouts.error')

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>

    </div>
@endsection