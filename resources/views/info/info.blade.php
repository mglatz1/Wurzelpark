@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $about_info->getTitle() }}</h1>
    </div>
    <hr>

    <div class="container">
        <p>{!! $about_info->getText() !!}</p>
    </div>
@endsection
