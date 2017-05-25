@extends('layouts.app')

@section('content')
    <div class = "title">{{ __("messages.message_welcome") }}</div>
    <hr>
    @include('layouts.errors')
    @include('layouts.error')
    @include('layouts.success')
@endsection
