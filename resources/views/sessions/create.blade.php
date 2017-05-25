@extends('layouts.app')

@section('content')

    @include('layouts.success')
    @include('layouts.error')

    <div class="form-group">
        <h1>{{ __("messages.message_login") }}</h1>
        <hr>

        <form method="POST" action="/login">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="username">{{ __("messages.message_username") }}:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
            </div>

            <div class="form-group">
                <label for="password">{{ __("messages.message_password") }}:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ __("messages.message_login") }}</button>
                <a class="btn btn-primary" href="register">{{ __("messages.message_register") }}</a>
            </div>
        </form>
    </div>
@endsection