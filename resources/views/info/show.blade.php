@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $info_item->title }}</h1>
        <hr>
    </div>

    <div class="container">
        <div><p>{!! $info_item->text !!}</p></div>
    </div>


    <div class="container">
        @if($info_item->url_to_image != null)
            <hr>
            <div><img src="{{$info_item->url_to_image}}" class="img-responsive" alt="{{$info_item->url_to_image}}" /></div>
        @endif
    </div>

    <div class="container">
        @if($info_item->url_to_pdf != null)
            <hr>
            <div><a href="{{$info_item->url_to_pdf}}">PDF</a></div>
        @endif
    </div>

    <div class="container">
        @if($info_item->url_to_image2 != null)
            <div><img src="{{$info_item->url_to_image2}}" class="img-responsive" alt="{{$info_item->url_to_image2}}" /></div>
        @endif
    </div>

    <div class="container">
        @if($info_item->url_to_audio != null)
            <hr>
            <audio controls>
                <source src="{{$info_item->url_to_audio}}" type="audio/mp3">{{ __("messages.error_audio_not_supported") }}</audio>
        @endif
    </div>

    <div class="container">
        @if($info_item->url_to_video != null)
            <hr>
            <video controls>
                <source src="{{$info_item->url_to_video}}" type="video/mp4">{{ __("messages.error_video_not_supported") }}</video>
        @endif
    </div>

    <div class="container">
        @if($info_item->url_to_youtube != null)
            <hr>
            <div><a href="{{$info_item->url_to_youtube}}">Youtube</a></div>
        @endif
    </div>
    <hr>
@endsection