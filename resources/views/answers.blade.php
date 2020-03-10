@extends('layout')

@section('content')
    <h1>{{ $question->text }}</h1>

    @foreach ($question->answers as $answer)
        <p>{{ $answer->text }}</p>
    @endforeach

    <a href="{{ route('homepage') }}">Go back to questions list</a>
@stop
