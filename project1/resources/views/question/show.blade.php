@extends('layout.detailq')
@section('title')
Home
@endsection
@section('css')
<style type="text/css">
	.pagination li{
		float: left;
		list-style-type: none;
		margin:5px;
        font-size: 20px;
	}
</style>
@endsection
@section('main')
<div class="content">
    <div class="stream-list">
        <div class="media stream">
            <div class="media-body">
                <div class="stream-headline">
                    <h1 class="stream-author">
                    {{ $question->username }}
                        <small>{{ $question->created_at }}</small>
                    </h1>
                    <div class="stream-text">
                        <h2>{{ $question->title }}</h2>
                        <p>{{ $question->question }}</p>
                    </div>
                </div><!--/.stream-headline-->
            </div>
        </div><!--/.media .stream-->
        <div style="text-align: center;">
        Answers
        </div> 

        @foreach($answers as $answer)
        <div class="media stream">
            <div class="media-body">
                <div class="stream-headline">
                    <h6 class="stream-author">
                    {{ $answer->username }}
                        <small>{{ $answer->created_at }}</small>
                    </h6>
                    <div class="stream-text">
                        <p>{{ $answer->answer }}</p>
                    </div>
                </div><!--/.stream-headline-->
                <div class="stream-options">
                    @if(Auth::user()->id == $answer->id_user)
                    <a href="{{ route('home.answer.edit', $answer->id) }}" class="btn btn-small">Edit</a>
                    <a href="{{ route('home.answer.delete', [ 'id_answer' => $answer->id] ) }}" class="btn btn-small">Delete</a>
                    @endif
                </div>
            </div>
        </div><!--/.media .stream-->
        @endforeach

    </div>
    <div class="stream-composer media">
        <div class="media-header">
            <h5>Your Answer</h5>
        </div>
        <div class="media-body">
            <form action="{{ route('home.answer.store') }}" method="post">
                @csrf
                <div class="row-fluid">
                    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                    <input type="hidden" name="id_question" value="{{ $question->id }}">
                    <input class="span12" style="height: 70px; resize: none;" type="text" name="answer" id="" required>
                </div>
                <div class="clearfix">
                    <button class="btn btn-info" type="submit">Post Your Answer</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection