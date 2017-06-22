@extends('layouts.app')

@section('content')

    @include('layouts.error')
    @include('layouts.success')

    <h1>Fotogallerie</h1>

    <div id="banner-gallery" class="gallery-module">
        <div class="gallery-module__wrapper">
            <div class="gallery-module__slide"><img src="" alt="SampleImage">asdfasdfasdf</div>
        </div>
    </div>
    <nav class="navigation-module">
        <ul id="banner-navigation" class="navigation-module__list"></ul>
    </nav>
@endsection
