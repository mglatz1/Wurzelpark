@extends('layouts.app')

@section('content')

    @include('layouts.error')
    @include('layouts.success')

    <div class="container">
        <h1>{{ __('messages.message_photoalbum_header') }}</h1>
    </div>

    <div class="container">
        @foreach ($array_of_photos as $key=>$photos_of_folder)
                <h2>{{ $key }}</h2>
                <div class="my-gallery container" itemscope itemtype="http://schema.org/ImageGallery">
                    @foreach ($photos_of_folder as $photo_filename=>$dimension)
                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="{{ asset($photo_filename) }}" itemprop="contentUrl" data-size="{{$dimension}}">
                                <img src="{{ asset($photo_filename) }}" itemprop="thumbnail" alt="basename($photo_filename)" />
                            </a>
                            <figcaption itemprop="caption description">{{ basename($photo_filename) }}</figcaption>
                        </figure>
                    @endforeach
                </div>
        @endforeach
    </div>

    @include('layouts.photoswipe')

@endsection
