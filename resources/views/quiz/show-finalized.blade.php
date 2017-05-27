@extends('layouts.app')

@section('content')

    @include('layouts.error')
    @include('layouts.success')

    <div class="container">
        <h3>{{ $question->station->display_name }}</h3>
        <h5>{{sprintf(__('messages.message_station_questions'), sizeof($question->station->questions)) }}.</h5>
        <hr>
    </div>

    <div class="container">
        <h4>{{ $question->text }}</h4>
        <h5>({{ __("messages.message_question") }} {{ $question->number }} {{ __('messages.message_of_level') }} "{{ $question->level->description }}")</h5>
        <hr>
    </div>

    <div class="container">
        @if($question->url_to_audio != null)
            <audio controls>
                <source src="{{$question->url_to_audio}}" type="audio/mp3">{{  __('messages.error_audio_not_supported') }}</audio>
            <hr>
        @endif
    </div>

    <div class="container">
        @if($question->url_to_image != null)
            <div><img src="{{$question->url_to_image}}" class="img-responsive" alt="{{$question->url_to_image}}" /></div>
            <hr>
        @endif
    </div>

    <div class="container">
        <fieldset>
            @foreach($question->answers as $answer)
                <input class="form-group" type="radio" id="{{ $answer->id }}" name="answer"
                       value="{{ $answer->id }}" @if ($answer->correct) checked @endif disabled>
                <span class="non-selectable-answer">
                    <label class="form-check-label" for="{{ $answer->id }}">{{ $answer->text }}</label>
                </span>
                <br/>
            @endforeach
        </fieldset>
        <hr>
    </div>
    <div class="container">
        <div class="tpbutton btn-toolbar">

            <form action="{{ url('quiz/'.$question->station->name.'/previous') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="question_number" id="question_number" value="{{ $question->number }}">
                <input type="hidden" name="level_id" id="level_id" value="{{ $question->level->id }}">
                <input type="hidden" name="station" id="station" value="{{ $question->station->id }}">
                <div class="btn navbar-btn @if ($hide_previous_button) disabled @endif">
                    <input type="submit" value="{{ __("messages.message_previous_question") }}" @if ($hide_previous_button) disabled @endif>
                </div>
            </form>

            <form action="{{ url('quiz/'.$question->station->name.'/next') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="question_number" id="question_number" value="{{ $question->number }}">
                <input type="hidden" name="level_id" id="level_id" value="{{ $question->level->id }}">
                <input type="hidden" name="station" id="station" value="{{ $question->station->id }}">
                <div class="btn navbar-btn @if ($hide_next_button) disabled @endif">
                    <input type="submit" value="{{ __("messages.message_next_question") }}" @if ($hide_next_button) disabled @endif>
                </div>
            </form>
        </div>
    </div>
    <hr>
@endsection
