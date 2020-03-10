@extends('layout')

@section('content')
    <h1>QA</h1>

    <form method="POST">
        @csrf
        <label class="label">Question:</label><br>
        <input class="input" type="text" name="text" id="text"><br>
        <p> {{ $errors->first('text') }} </p>

        <input type="submit" value="Submit">
    </form>

    @foreach ($questions as $question)
        @php ($questionId = $question->id)
        <a href="{{ route('question', ['question_id' => $questionId]) }}"><h3>{{ $question->text }}</h3></a>
        <p>{{$question->howManyAnswers()}} answers</p>
    @endforeach
@stop
