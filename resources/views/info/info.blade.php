@extends('layouts.app')

@section('content')
    <div classe="col-md-5">
        <h1>{{ $about_info->title }}</h1>
    </div>
    <hr>

    <div classe="col-md-5">
        <p>{!! $about_info->text !!}</p>
    </div>
@endsection
