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
            <div class="my-gallery container photos" itemscope itemtype="http://schema.org/ImageGallery">
                @foreach ($photos_of_folder as $photo_filename=>$dimension)
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="{{ asset($photo_filename) }}" itemprop="contentUrl" data-size="{{$dimension}}">
                            <img src="{{ asset($photo_filename) }}" itemprop="thumbnail" alt="basename($photo_filename)" />
                        </a>
                        <figcaption itemprop="caption description">{{ basename($photo_filename) }}</figcaption>
                    </figure>
                @endforeach
            </div>

            <div class="container picker" hidden>
                <h4>Wähle Bilder für deine Postkarte aus:</h4>
                <select class="image-picker limit_callback" data-limit="2" multiple="multiple">
                    @foreach ($photos_of_folder as $photo_filename=>$dimension)
                        <option data-img-src="{{ $photo_filename }}" value="{{ $photo_filename }}">Photo</option>
                    @endforeach
                </select>
                <script>$("select").imagepicker();</script>

                <h4>Wähle eine Postkarten-Vorlage aus:</h4>
                <div class="picker">
                    <select class="image-picker">
                        <option data-img-src="http://placekitten.com/130/200" value="1">Cute Kitten 2</option>
                        <option data-img-src="http://placekitten.com/220/200" value="2">Cute Kitten 3</option>
                    </select>
                </div>
                <script>$("select").imagepicker();</script>
            </div>
        @empty
            <p>{{ __('messages.message_photoalbum_empty_album') }}</p>
        @endforelse
    </div>

    <div>
        <input type="submit" value="Postkarte erstellen..." id="postcard" onclick="choosePostcard()">
    </div>

    @include('layouts.photoswipe')

    <script>
        function choosePostcard() {
            if(document.getElementsByClassName('photos')[0].style.display=='none') {
                document.getElementsByClassName('photos')[0].style.display = 'block';
                document.getElementsByClassName('picker')[0].style.display = 'none';
                document.getElementById('postcard').value = 'Postkarte erstellen...';
            }
            else {
                document.getElementsByClassName('photos')[0].style.display = 'none';
                document.getElementsByClassName('picker')[0].style.display = 'block';
                document.getElementById('postcard').value = 'Zurück zum Fotoalbum';
            }
        }
    </script>
@endsection