@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $info_item->getTitle() }}</h1>
        <hr>
    </div>

    <div class="container">
        <div><p>{!! $info_item->getText() !!}</p></div>
    </div>

    <div class="container">
        @if($info_item->url_to_image != null)
            <hr>
            <div><img src="{{$info_item->url_to_image}}" class="img-responsive" alt="{{$info_item->url_to_image}}" /></div>
        @endif
    </div>

    <div class="container">
        @if($info_item->getPdf() != null)
            <hr>
            <div><a href="{{ $info_item->getPdf() }}">PDF</a></div>
        @endif
    </div>

    <div class="container">
        @if($info_item->url_to_image2 != null)
            <hr>
            <div><img src="{{$info_item->url_to_image2}}" class="img-responsive" alt="{{$info_item->url_to_image2}}" /></div>
        @endif
    </div>

    <div class="container">
        @if($info_item->getAudio() != null)
            <hr>
            <audio controls>
                <source src="{{$info_item->getAudio()}}" type="audio/mp3">{{ __("messages.error_audio_not_supported") }}</audio>
        @endif
    </div>

    <div class="container">
        @if($info_item->getVideo() != null)
            <hr>
            <video controls>
                <source src="{{$info_item->getVideo()}}" type="video/mp4">{{ __("messages.error_video_not_supported") }}</video>
        @endif
    </div>

    <div class="container">
        @if($info_item->getYouTubeVideo() != null)
            <hr>
            <div><a href="{{$info_item->getYouTubeVideo()}}" target="_blank">YouTube</a></div>
        @endif
    </div>
    <hr>
@endsection