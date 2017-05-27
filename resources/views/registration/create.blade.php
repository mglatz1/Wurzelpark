@extends('layouts.app')

@section('content')

    @include('layouts.success')
    @include('layouts.error')

    @include('layouts.errors')

    <div class="form-group">
        <h1>{{ __("messages.message_register") }}</h1>
        <hr>

        <div class="form-group">
            <p>{{ __("messages.message_already_account") }}:</p>
            <a class="btn btn-primary" href="{{ url('login') }}"> {{ __("messages.message_login") }}</a>
        </div>
        <hr>
        <div class="form-group">

            <form method="POST" action=" {{ url('register') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">{{ __("messages.message_name") }}:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="username">{{ __("messages.message_username") }}:</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">{{ __("messages.message_email") }}:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">{{ __("messages.message_password") }}:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">{{ __("messages.message_confirm_password") }}:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <label for="year_of_birth">{{ __("messages.message_year_of_birth") }}:</label>
                    <input type="text" class="form-control" id="year_of_birth" name="year_of_birth" value="{{ old('year_of_birth') }}" required>
                </div>

                <div class="form-group">
                    <label for="language">{{ __("messages.message_languages") }}:</label>
                    <select id="language" class="form-control" name="language" required>
                        <option value="de" {{ old('language')  == "de" ? "selected": "" }}>{{ __("messages.message_german") }}</option>
                        <option value="en" {{ old('language')  == "en" ? "selected": "" }}>{{ __("messages.message_english") }}</option>
                        <option value="it" {{ old('language')  == "it" ? "selected": "" }}>{{ __("messages.message_italian") }}</option>
                    </select>
                </div>

                <div class="form-group">
                    <p>{{ __("messages.message_info_registration1") }}</p>
                    <p>{{ __("messages.message_info_registration2") }}</p>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __("messages.message_register") }}</button>
                </div>
            </form>
        </div>
        <hr>
    </div>
@endsection