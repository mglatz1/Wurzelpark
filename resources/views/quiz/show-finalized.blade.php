@extends('layouts.app')

@section('content')

    @include('layouts.error')
    @include('layouts.success')


    <div class="container">
        <div><h3>{{ $question->station->display_name }} (Frage {{ $question->number }}, Level {{ $question->level }})</h3></div>
        <hr>
    </div>

    <div class="container">
        <div><h4>{{ $question->text }}</h4></div>
        <hr>
    </div>

    <div class="container">
        @if($question->url_to_audio != null)
            <audio controls>
                <source src="{{$question->url_to_audio}}" type="audio/mp3">Audio wird auf deinem Gerät nicht unterstützt.</audio>
            <hr>
        @endif
    </div>

    <div class="container">
        @if($question->url_to_image != null)
            <div><img src="{{$question->url_to_image}}" alt="Bild" /></div>
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

            <form action="/quiz/{{ $question->station->name }}/previous" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="question_number" id="question_number" value="{{ $question->number }}">
                <input type="hidden" name="level" id="level" value="{{ $question->level }}">
                <input type="hidden" name="station" id="station" value="{{ $question->station->id }}">
                <div class="btn navbar-btn @if ($hide_previous_button) disabled @endif">
                    <input type="submit" value="Vorige Frage" @if ($hide_previous_button) disabled @endif>
                </div>
            </form>

            <form action="/quiz/{{ $question->station->name }}/next" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="question_number" id="question_number" value="{{ $question->number }}">
                <input type="hidden" name="level" id="level" value="{{ $question->level }}">
                <input type="hidden" name="station" id="station" value="{{ $question->station->id }}">
                <div class="btn navbar-btn @if ($hide_next_button) disabled @endif">
                    <input type="submit" value="Nächste Frage" @if ($hide_next_button) disabled @endif>
                </div>
            </form>
        </div>
    </div>
    <hr>
@endsection
