@extends('layouts.app')

<link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" />

@section('content')

    @include('layouts.error')
    @include('layouts.success')

    <div class="container">
        <h1>{{ __('messages.message_photoalbum_header') }}</h1>
    </div>

    <div class="container">
        <form method="POST" action=" {{ url('photos/') }}">
            <div class="form-group">
                <label for="datepicker">{{ __("messages.message_photoalbum_select_date") }}</label>
                <input type="text" class="form-control" id="datepicker" name="date" value="" required>
            </div>

            <div class="form-group">
                <a href="{{ url('photos/') }}" class="btn btn-primary" role="button">{{ __("messages.message_photoalbum_submit") }}</a>
            </div>
        </form>
    </div>


    <div class="container">
        @forelse ($array_of_photos as $key=>$photos_of_folder)
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
        @empty
            <p>{{ __('messages.message_photoalbum_empty_album') }}</p>
        @endforelse
    </div>

    @include('layouts.photoswipe')

@endsection
