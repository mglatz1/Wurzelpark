@extends('layouts.app')

@section('content')
    <div class="blog-post">
        <div><h3>Frage {{ $frage_item->frage }}, Level {{ $frage_item->level }}</h3> </div>
    </div>

    <div class="blog-post">
        <div><h4>{{ $frage_item->fragetext }}</h4> </div>
    </div>

    <div class="blog-post">
        @if($frage_item->fragebildpfad != null)
            <div><img src="{{$frage_item->fragebildpfad}}" alt="Bild" /></div>
        @endif
    </div>

    <div class="form-group">
        <form action="store" method="POST">
            {{ csrf_field() }}
            <fieldset>
                <input type="hidden" id="frageid" name="frageid" value="{{$frage_item->id}}">
                <input type="hidden" id="station" name="station" value="{{$frage_item->qrcode}}">
                <input type="hidden" id="frage" name="frage" value="{{$frage_item->frage}}">
                <input type="hidden" id="level" name="level" value="{{$frage_item->level}}">

                <input type="radio" id="a1" name="antwort" value="1">
                <label for="a1">{{ $frage_item->antwort1 }}</label>
                <br>
                <input type="radio" id="a2" name="antwort" value="2">
                <label for="a2">{{ $frage_item->antwort2 }}</label>
                <br>
                <input type="radio" id="a3" name="antwort" value="3">
                <label for="a3">{{ $frage_item->antwort3 }}</label>
                <br>
                <input type="radio" id="a4" name="antwort" value="4">
                <label for="a4">{{ $frage_item->antwort4 }}</label>
            </fieldset>

            <div class="button">
                <input type="submit" value="Antworten">
            </div>
        </form>
    </div>

@endsection
