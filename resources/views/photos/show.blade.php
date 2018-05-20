@extends('layouts.app')

<link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/image-picker.css') }}" rel="stylesheet" />
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/image-picker.min.js') }}"></script>

<script>
    function submitDate() {
        var url = "{{ url('photos/') }}";
        var date = $('#datepicker').val().split('/');

        if (date.length === 3)
        {
            window.location.replace(url + '/' + date[2] + '-' + date[0] + '-' + date[1]);
        }
    }

    function loadImages() {
        $.ajax({
            method: 'post',
            url: '{{ url('load') }}',
            data: { _token: '{{ csrf_token() }}', date: '{{ $date }}', page: $('#page').val()},
            dataType: 'json',
            success: function(response){
                $('#page').val(response.page);
                jQuery.each(response.photos['{{ $date }}'], function(key) {
                    // todo: change to http://www.wurzelpark.at/Wurzelpark in production
                    var url_prefix = "http://localhost:9999";
                    $('#photodiv').append('<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">' +
                        '<a href="' + url_prefix + key + '" itemprop="contentUrl" data-size="' + response.photos['{{ $date }}'][key]+ '">' +
                        '<img src="' + url_prefix + key + '" itemprop="thumbnail" alt="' + url_prefix + key + '" /> </a>' +
                        '<figcaption itemprop="caption description">' + url_prefix + key + '</figcaption></figure>');
                });

                if (response.finished === 1) {
                    $('#loadmore').hide();
                }
            }
        });
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
            <div class="row">
                <div id="photodiv" class="my-gallery container photos" itemscope itemtype="http://schema.org/ImageGallery">
                    @foreach ($photos_of_folder as $photo_filename=>$dimension)
                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="{{ asset($photo_filename) }}" itemprop="contentUrl" data-size="{{$dimension}}">
                                <img src="{{ asset($photo_filename) }}" itemprop="thumbnail" alt="{{ basename($photo_filename) }}" />
                            </a>
                            <figcaption itemprop="caption description">{{ basename($photo_filename) }}</figcaption>
                        </figure>
                    @endforeach
                </div>
                @if ($finished == 0)
                    <br/>
                    <div class="container">
                        <a href="#" id="loadmore" onClick="loadImages(); return false;"
                            class="btn btn-default" role="button">{{ __("messages.message_load_more_images") }}</a>
                        <input type="hidden" name="page" id="page" value="{{ $page }}">
                    </div>
                @endif
            </div>
        @empty
            <p>{{ __('messages.message_photoalbum_empty_album') }}</p>
        @endforelse
    </div>

    <div class="container">
        <hr>
        <a href="{{ url('postcard') }}" class="btn btn-primary" role="button">{{ __("messages.message_to_postcard_generator") }}</a>
        <hr>
    </div>
    @include('layouts.photoswipe')
@endsection