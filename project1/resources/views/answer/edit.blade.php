@extends('layout.detailq')
@section('title')
Edit
@endsection
@section('main')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>
                Edit Your answer</h3>
        </div>
        <div class="module-body">
            <form action="{{ route('home.answer.update', $answer->id) }}" method="POST">
                @csrf
                @method('patch')
                <input type="hidden" name="id" value="{{ $answer->id }}">
                <input type="hidden" name="id_question" value="{{$answer->id_question}}">
                <h3 style="text-align: left;">Your Answer</h3>
                <div class="form-group">
                    <input type="text" class="span11" name="answer" required value="{{ $answer->answer }}">
                </div>
                <input type="submit" class="btn btn-info" value="Edit">
                <a role="button" class="btn btn-danger" href="{{ route('home.question.show', $answer->id_question) }}">Back</a>
            </form>
            
        </div>
    </div>
</div>

@endsection