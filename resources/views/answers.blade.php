@extends('layout')

@section('content')
    <h1>{{ $question->text }}</h1>

    <form method="POST">
        @csrf
        <label class="label">Answer:</label><br>
        <input class="input" type="text" name="text" id="text"><br>
        <p> {{ $errors->first('text') }} </p>

        <input class="input" type="hidden" name="question" id="question" value="{{ $question->id }}">

        <input type="submit" value="Submit">
    </form>

    @foreach ($question->answers as $answer)
        <p>{{ $answer->text }}</p>
    @endforeach

    <a href="{{ route('homepage') }}">Go back to questions list</a>
@stop
