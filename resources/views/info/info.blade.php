@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $about_info->title }}</h1>
    </div>
    <hr>

    <div class="container">
        <p>{!! $about_info->text !!}</p>
    </div>
@endsection
