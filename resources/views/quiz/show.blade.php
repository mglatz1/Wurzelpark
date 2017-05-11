@extends('layouts.app')

@section('content')
    <div class="blog-post">
        <div><h3>Frage {{ $frage_item->Frage }} Level {{ $frage_item->Level }}</h3> </div>
    </div>

    <div class="blog-post">
        <div><h4>{{ $frage_item->FrageText }}</h4> </div>
    </div>

    <div class="blog-post">
        @if($frage_item->FrageBildPfad != null)
            <div><img src="{{$frage_item->FrageBildPfad}}" alt="Bild" /></div>
        @endif
    </div>

    <div class="form-group">
        <form>
            <fieldset>
                <input type="radio" id="a1" name="antwort">
                <label for="mc"> {{$frage_item->Antwort1}} </label>
                <br>
                <input type="radio" id="a2" name="antwort">
                <label for="vi"> {{$frage_item->Antwort2}} </label>
                <br>
                <input type="radio" id="a3" name="antwort">
                <label for="ae"> {{$frage_item->Antwort3}} </label>
                <br>
                <input type="radio" id="a4" name="antwort">
                <label for="ae"> {{$frage_item->Antwort4}} </label>
            </fieldset>

            <div class="button">
                <input type="submit" value="Antworten">
            </div>
        </form>
    </div>

@endsection