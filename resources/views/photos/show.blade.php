@extends('layouts.app')

@section('content')

    @include('layouts.error')
    @include('layouts.success')

    <h1>CSS3 Animated Swipe Gallery</h1>

    <div id="banner-gallery" class="gallery-module">
        <div class="gallery-module__wrapper">
            <div class="gallery-module__slide"><img src="http://www.fillmurray.com/1536/672"></div>
            <div class="gallery-module__slide"><img src="http://www.fillmurray.com/1536/672"></div>
            <div class="gallery-module__slide"><img src="http://www.fillmurray.com/1536/672"></div>
            <div class="gallery-module__slide"><img src="http://www.fillmurray.com/1536/672"></div>
            <div class="gallery-module__slide"><img src="http://www.fillmurray.com/1536/672"></div>
            <div class="gallery-module__slide"><img src="http://www.fillmurray.com/1536/672"></div>
            <div class="gallery-module__slide"><img src="http://www.fillmurray.com/1536/672"></div>
            <div class="gallery-module__slide"><img src="http://www.fillmurray.com/1536/672"></div>
        </div>
    </div>
    <nav class="navigation-module">
        <ul id="banner-navigation" class="navigation-module__list"></ul>
    </nav>
@endsection
