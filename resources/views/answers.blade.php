@extends('layout')

@section('content')
    <div class="col-lg-6 offset-lg-3 text-center">
        <h1 class="text-center my-5">{{ $question->text }}</h1>

        @foreach ($question->answers as $answer)
            <p>{{ $answer->text }}</p>
        @endforeach

        <br/>

        <form method="POST">
            @csrf
            <h3 class="label">Answer the question! </h3><br>
            <input class="input" type="text" name="text" id="text"><br>
            <p> {{ $errors->first('text') }} </p>

            <input class="input" type="hidden" name="question" id="question" value="{{ $question->id }}">

            <input type="submit" value="Submit">

        </form>

        <br/>

        <a href="{{ route('homepage') }}">Go back to questions list</a>
    </div>
@stop
