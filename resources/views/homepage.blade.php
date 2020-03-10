@extends('layout')

@section('content')
    <div class="col-lg-6 offset-lg-3">
        <h1 class="text-center my-5">Q&A</h1>

        <form method="POST">
            @csrf

            <div class="row">
                <div class="col-lg-11">
                    <input class="form-control" type="text" name="text" id="text" placeholder="Where do vegans get their protein?"><br>
                    <p> {{ $errors->first('text') }} </p>
                </div>
                <div class="col-lg-1">
                    <button class="btn btn-primary" type="submit">
                        Ask
                    </button>
                </div>
            </div>
        </form>

        <table class="table">
            <tbody>
            @foreach ($questions as $question)
                @php ($questionId = $question->id)
                <tr>
                    <td><a href="{{ route('question', ['question_id' => $questionId]) }}"><h3>{{ $question->text }}</h3></a></td>
                    <td>{{$question->howManyAnswers()}} answers</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
