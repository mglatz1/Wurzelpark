@extends('layouts.app')

@section('content')
    <div class="blog-post">
        <div><h3>Frage {{ $question->number }}, Level {{ $question->level }}</h3></div>
        <hr>
    </div>
    <div class="blog-post">
        <div><h4>{{ $question->text }}</h4></div>
        <hr>
    </div>

    <div class="blog-post">
        @if($question->url_to_audio != null)
            <audio controls>
                <source src="{{$question->url_to_audio}}" type="audio/mp3">Audio wird auf deinem Gerät nicht unterstützt.</audio>
            <hr>
        @endif
    </div>

    <div class="blog-post">
        @if($question->url_to_image != null)
            <div><img src="{{$question->url_to_image}}" alt="Bild" /></div>
            <hr>
        @endif
    </div>

    <div class="form-group">
        <form action="store" method="POST">
            {{ csrf_field() }}
            <fieldset>
                @foreach($question->answers as $answer)
                    <input class="form-group" type="radio" id="{{ $answer->id }}" name="answer" value="{{ $answer->id }}">
                    <label class="form-check-label" for="{{ $answer->id }}">{{ $answer->text }}</label>
                    <br/>
                @endforeach
            </fieldset>
            <hr>

            <div class="button">
                <input type="submit" value="Antworten">
            </div>
        </form>
    </div>

    @include('layouts.errors')
    <hr>
@endsection
