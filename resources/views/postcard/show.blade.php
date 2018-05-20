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

        // Check if valid using HTML5 checkValidity() builtin function
        if ($('#generate-form')[0].checkValidity()) {
            $('#generate-form')[0].submit();
        } else {
            alert('{{ __('messages.error_enter_valid_email') }}');
        }
        return false;
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
                    // todo: change to www.wurzelpark.at/Wurzelpark in production
                    var url_prefix = "http://localhost:9999";
                    $('#selectedimages').append('<option data-img-src="' + url_prefix + key + '" value="' + url_prefix + key + '"></option>')
                });

                if (response.finished === 1) {
                    $('#loadmore').hide();
                }

                $("select").imagepicker({limit_reached: function(){alert('{{ __("messages.error_two_images_maximum") }}')}})
            }
        });
    }

    $(document).ready(function() {
        $("select").imagepicker({limit_reached: function(){alert('{{ __("messages.error_two_images_maximum") }}')}})
    });
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

                <input type="hidden" class="form-control" id="selecteddate" name="selecteddate"
                       value="{{ $date }}">

                <div class="picker">
                    <p>{{ __('messages.message_choose_postcard_images') }}</p>
                    <label>
                        <select id="selectedimages" name="selectedimages[]" class="image-picker limit_callback" data-limit="2" multiple="multiple">
                            @foreach ($photos_of_folder as $photo_filename=>$dimension)
                                <option data-img-src="{{ asset($photo_filename) }}" value="{{ asset($photo_filename) }}"></option>
                            @endforeach
                        </select>
                    </label>
                    @if ($finished == 0)
                        <a href="#" id="loadmore" onClick="loadImages(); return false;"
                           class="btn btn-default" role="button">{{ __("messages.message_load_more_images") }}</a>
                        <input type="hidden" name="page" id="page" value="{{ $page }}">
                    @endif
                </div>
                <br/>
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
