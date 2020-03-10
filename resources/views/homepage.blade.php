@extends('layout')

@section('content')
    <h1>QA</h1>
    @foreach ($questions as $question)
        <h3>{{ $question->text }}</h3>
        <p>{{$question->howManyAnswers()}} answers</p>
    @endforeach
@stop
