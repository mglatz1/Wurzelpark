@extends('layouts.app')

<link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/image-picker.css') }}" rel="stylesheet" />
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/image-picker.min.js') }}"></script>

<script>
    function submitDate() {
        var url = "{{ url('postcard/') }}";
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
        <h1>{{ __('messages.message_generate_postcard') }}</h1>
        <p>Hier kannst du eine individuelle Postkarte generieren. Wähle ein Datum, zwei Fotos und eine Vorlage für die
            Postkarte aus. Nachdem du den Button "Postkarte generieren" gedrückt hast, wird die Postkarte generiert und dir per Mail zugestellt.</p>
    </div>


    <div class="container">
        <form method="POST" action="{{ url('postcard/') }}">
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
            <form method="POST" action="{{ url('postcard') }}">
                {{ csrf_field() }}

                <h2>{{ $key }}</h2>
                <div class="container picker">
                    <h4>{{ __('messages.message_choose_postcard_images') }}:</h4>


                        <label>
                            <select name="selectedimages" class="image-picker limit_callback" data-limit="2" multiple="multiple">
                                @foreach ($photos_of_folder as $photo_filename=>$dimension)
                                    <option data-img-src="{{ $photo_filename }}" value="{{ $photo_filename }}"></option>
                                @endforeach
                            </select>
                        </label>
                        <script>$("select").imagepicker()</script>

                        <h4>{{ __('messages.message_choose_postcard_template') }}:</h4>
                        <div class="picker">
                            <label>
                                <select name="selectedtemplate" class="image-picker">
                                    @foreach ($postcards as $postcard)
                                        <option data-img-src="{{ $postcard }}" value="{{ $postcard }}">Cute Kitten 2</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <script>$("select").imagepicker({limit_reached: function(){alert('{{ __("messages.error_two_images_maximum") }}')}})</script>
                </div>

                @if ($email)
                    <div class="container">
                        <input type="hidden" name="email" id="email" value="{{ $email }}">
                        <p>Die Postkarte wird an dich ({{ $email }}) versendet. Du kannst auch optional eine weitere
                            E-Mail Adresse eingeben:</p>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email2" value="">
                        </div>
                        <input type="hidden" name="email" id="email" value="{{ $email }}">
                    </div>
                @else
                    <div class="container">
                        <p>Gib eine E-Mail Adresse ein. An diese wird die Postkarte versendet:</p>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" value="" required>
                        </div>
                    </div>
                @endif


                <div class="btn navbar-btn">
                    <input type="submit" value="{{ __("messages.message_generate_and_send_postcard") }}">
                </div>
            </form>
        @empty
            <p>{{ __('messages.message_photoalbum_empty_album') }}</p>
        @endforelse
    </div>
@endsection
