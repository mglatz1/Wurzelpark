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

    function submitGeneration() {
        if ($('#selectedimages option:selected').length === 0) {
            alert('{{ __('messages.error_choose_one_image') }}');
            return;
        }

        if ($('#email').val().length === 0) {
            alert('{{ __('messages.error_enter_email') }}');
            return;
        }

        $('#generate-form').submit();
    }
</script>

@section('content')

    @include('layouts.error')
    @include('layouts.success')

    <div class="container">
        <h1>{{ __('messages.message_generate_postcard') }}</h1>
        <p>{{ __('messages.message_generate_postcard_info') }}</p>
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
            <form id="generate-form" method="POST" action="{{ url('postcard') }}">
                {{ csrf_field() }}

                <div class="picker">
                    <p>{{ __('messages.message_choose_postcard_images') }}</p>
                    <label>
                        <select id="selectedimages" name="selectedimages[]" class="image-picker limit_callback" data-limit="2" multiple="multiple">
                            @foreach ($photos_of_folder as $photo_filename=>$dimension)
                                <option data-img-src="{{ asset($photo_filename) }}" value="{{ asset($photo_filename) }}"></option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <script>$("select").imagepicker()</script>

                <p>{{ __('messages.message_choose_postcard_template') }}</p>
                <div class="picker postcard-template">
                    <label>
                        <select name="selectedtemplate" class="image-picker">
                            @foreach ($postcards as $postcard)
                                <option data-img-src="{{ asset($postcard) }}" value="{{ asset($postcard) }}"></option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <script>$("select").imagepicker({limit_reached: function(){alert('{{ __("messages.error_two_images_maximum") }}')}})</script>

                @if ($email)
                    <div>
                        <p>{{ __("messages.message_send_postcard_info1") }} ({{ $email }}). {{ __("messages.message_send_postcard_info2") }}</p>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email2" name="email2" value="">
                        </div>
                        <input type="hidden" name="email" id="email" value="{{ $email }}">
                    </div>
                @else
                    <div>
                        <p>{{ __("messages.message_send_postcard_info3") }}</p>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                @endif

                <div class="form-group">
                    <a href="#" onClick="submitGeneration(); return false;"
                       class="btn btn-primary" role="button">{{ __("messages.message_generate_and_send_postcard") }}</a>
                </div>
            </form>
        @empty
            <p>{{ __('messages.message_photoalbum_empty_album') }}</p>
        @endforelse
    </div>

    <div class="container">
        <hr>
        <a href="{{ url('photos') }}" class="btn btn-primary" role="button">{{ __("messages.message_to_photoalbum") }}</a>
        <hr>
    </div>
@endsection
