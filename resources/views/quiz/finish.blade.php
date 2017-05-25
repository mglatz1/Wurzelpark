@extends('layouts.app')

@section('content')

    @include('layouts.error')
    @include('layouts.success')

    <div class="container">
        <h1>{{ __('messages.message_finish_quiz') }}</h1>
    </div>
    <hr>

    <div class="container">
        <p>{{ __('messages.message_quiz_finish_info1') }}</p>
        <p>{{ __('messages.message_quiz_finish_info2') }}</p>
    </div>
    <hr>
    <div class="container">
        <div class="form-group">
            <form method="POST" action="/finish-quiz">
                {{ csrf_field() }}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __('messages.message_finish_quiz') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
