@extends('layouts.app')

<link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" />
<script>
    function submitDate() {
        var url = "{{ url('photos/') }}";
        var date = $('#datepicker').val().split('/');

        if (date.length === 3)
        {
            window.location.replace(url + '/' + date[2] + '-' + date[0] + '-' + date[1]);
        }
    }
</script>

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
                <input type="text" class="form-control" id="datepicker" name="date"
                       value="<?php $dateTmp = explode('-', $date); echo $dateTmp[1].'/'.$dateTmp[2].'/'.$dateTmp[0]; ?>" required>
            </div>

            <div class="form-group">
                <a href="#" onClick="submitDate(); return false;"
                   class="btn btn-primary" role="button">{{ __("messages.message_photoalbum_submit") }}</a>
            </div>
        </form>
    </div>

    <div class="container">
        @forelse ($array_of_photos as $key=>$photos_of_folder)
            <h2>{{ $key }}</h2>
            <div class="my-gallery container" itemscope itemtype="http://schema.org/ImageGallery">
                @foreach ($photos_of_folder as $photo_filename=>$dimension)
                    <ul id="table" class="list-unstyled">
                        <li>
                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="{{ asset($photo_filename) }}" itemprop="contentUrl" data-size="{{$dimension}}">
                            <img src="{{ asset($photo_filename) }}" itemprop="thumbnail" alt="basename($photo_filename)" />
                            </a>
                            <figcaption itemprop="caption description">{{ basename($photo_filename) }}</figcaption>
                            </figure>
                        </li>
                        <li>
                            <label>My name</label></li>
                    </ul>
                    <input type="checkbox"/>

                @endforeach
            </div>
        @empty
            <p>{{ __('messages.message_photoalbum_empty_album') }}</p>
        @endforelse
    </div>

    @include('layouts.photoswipe')

@endsection
