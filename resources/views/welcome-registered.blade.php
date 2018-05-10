@extends('layouts.app')

@section('content')
    <div class="title">{{ __("messages.message_welcome") }}</div>
    <br/>
    <div class="title">{{ __("messages.message_welcome_registered") }}</div>
    <hr>

    @include('layouts.errors')
    @include('layouts.error')
    @include('layouts.success')
@endsection
