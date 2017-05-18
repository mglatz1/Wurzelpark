@extends('layouts.app')

@section('content')
    <div classe="col-md-5">
        <div><h1>{{ $info_item->title }}</h1></div>
    </div>

    <hr>

    <div classe="col-md-5">
        <div><p>{!! $info_item->text !!}</p></div>
    </div>


    <div classe="col-md-5">
        @if($info_item->url_to_image != null)
            <hr>
            <div><img src="{{$info_item->url_to_image}}" alt="Bild" /></div>
        @endif
    </div>

    <div classe="col-md-5">
        @if($info_item->url_to_pdf != null)
            <hr>
            <div><a href="{{$info_item->url_to_pdf}}">PDF</a></div>
        @endif
    </div>

    <div classe="col-md-5">
        @if($info_item->url_to_image2 != null)
            <div><img src="{{$info_item->url_to_image2}}" alt="Bild2" /></div>
        @endif
    </div>

    <div classe="col-md-5">
        @if($info_item->url_to_audio != null)
            <hr>
            <audio controls>
                <source src="{{$info_item->url_to_audio}}" type="audio/mp3">Audio wird auf deinem Gerät nicht unterstützt.</audio>
        @endif
    </div>

    <div classe="col-md-5">
        @if($info_item->url_to_video != null)
            <hr>
            <video controls>
                <source src="{{$info_item->url_to_video}}" type="video/mp4">Video wird auf deinem Gerät nicht unterstützt.</video>
        @endif
    </div>

    <div classe="col-md-5">
        @if($info_item->url_to_youtube != null)
            <hr>
            <div><a href="{{$info_item->url_to_youtube}}">Youtube</a></div>
        @endif
    </div>

    <hr>
@endsection