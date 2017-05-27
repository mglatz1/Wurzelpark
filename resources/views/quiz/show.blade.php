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
                <source src="{{$question->url_to_audio}}" type="audio/mp3"> {{  __("messages.error_audio_not_supported") }}</audio>
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
        <div class="form-group">
            <form action="{{ url('quiz/'.$question->station->name) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="question_number" id="question_number" value="{{ $question->number }}">
                <input type="hidden" name="level" id="level" value="{{ $question->level->id }}">
                <input type="hidden" name="station" id="station" value="{{ $question->station->id }}">

                <?php $data=serialize($wrong_answers);
                $encoded_wrong_answers=htmlentities($data);
                echo '<input type="hidden" name="encoded_wrong_answers" value="'.$encoded_wrong_answers.'">';
                ?>

                <fieldset>
                    @foreach($question->answers as $answer)
                        <input class="form-group" type="radio" id="{{ $answer->id }}" name="answer" value="{{ $answer->id }}"
                               @if(in_array($answer->id, $wrong_answers)) disabled @endif>
                        <span @if(in_array($answer->id, $wrong_answers)) class="non-selectable-answer" @endif>
                            <label class="form-check-label" for="{{ $answer->id }}">{{ $answer->text }}</label>
                        </span>
                        <br/>
                    @endforeach
                </fieldset>
                <hr>

                <div class="btn navbar-btn">
                    <input type="submit" value="{{ __("messages.message_to_answer") }}">
                </div>
            </form>
        </div>
    </div>
    <hr>
@endsection
