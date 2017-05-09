@extends('layouts.app')

@section('content')
    <div class="blog-post">
        <h3>{{ $about_info->information }}</h3>
    </div>

    <div class="blog-post">
        <p>{!! $about_info->infotext !!}</p>
    </div>
@endsection
