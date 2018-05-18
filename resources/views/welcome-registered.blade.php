@extends('layouts.app')

@section('content')
    @include('layouts.errors')
    @include('layouts.error')
    @include('layouts.success')

    <div class="title">{{ __("messages.message_welcome") }}</div>
    <br/>
    <div class="title">{{ __("messages.message_welcome_registered") }}</div>
    <hr>
    <a href="{{ url('photos') }}" class="btn btn-primary" role="button">{{ __("messages.message_to_photoalbum") }}</a>
    <hr>
    <a href="{{ url('postcard') }}" class="btn btn-primary" role="button">{{ __("messages.message_to_postcard_generator") }}</a>
    <hr>

@endsection
