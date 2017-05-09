@extends('layouts.app')

@section('content')
    <div class="blog-post">
        <h3>Ein Fehler ist aufgetreten.</h3>
    </div>

    <div class="blog-post">
        <p>{!!  $error_message !!}</p>
    </div>
@endsection
