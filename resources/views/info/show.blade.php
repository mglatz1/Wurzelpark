@extends('layouts.layout')

@section('content')
    <div class="blog-post">
        <div><h3>{{ $info_item->information }}</h3> </div>
    </div>

    <div class="blog-post">
        <div>{!! $info_item->infotext !!}</div>
    </div>

    <div class="blog-post">
    @if($info_item->guidebildpfad != null)
        <div><img src="{{$info_item->guidebildpfad}}" alt="Bild" /></div>
    @endif
    </div>

    <div class="blog-post">
    @if($info_item->guidepdfpfad != null)
        <div><a href="{{$info_item->guidepdfpfad}}">PDF</a></div>
    @endif
    </div>

    <div class="blog-post">
    @if($info_item->guidebildpfad2 != null)
        <div><img src="{{$info_item->guidebildpfad2}}" alt="Bild2" /></div>
    @endif
    </div>

    <div class="blog-post">
    @if($info_item->guideaudiopfad != null)
        <audio controls>
            <source src="{{$info_item->guideaudiopfad}}" type="audio/mp3">Audio not available on your device</audio>
    @endif
    </div>

    <div class="blog-post">
    @if($info_item->guidevideopfad != null)
        <video controls>
            <source src="{{$info_item->guidevideopfad}}" type="video/mp4">Audio not available on your device</video>
    @endif
    </div>

@endsection