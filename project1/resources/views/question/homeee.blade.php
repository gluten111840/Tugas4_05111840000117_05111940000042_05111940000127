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
@section('hello')
<h1>Home</h1>
@endsection
@section('main')
<div class="content">
    <div class="stream-list">
        @foreach($questions as $key => $question)
        <div class="media stream">
            <div class="media-body">
                <div class="stream-headline">
                    <h5 class="stream-author">
                    {{ $question->username }}
                        <small>{{ $question->created_at }}</small>
                    </h5>
                    <div class="stream-text">
                        <h2>{{ $question->title }}</h2>
                        <p>{{ $question->question }}</p>
                    </div>
                </div><!--/.stream-headline-->

                <div class="stream-options">

                    <a href="{{ route('home.question.show', $question->id) }}" class="btn btn-small">
                        <i class="icon-reply shaded"></i>
                        Reply
                    </a>
                    @if(Auth::user()->id == $question->id_user)
                    <a href="{{ route('home.question.edit', $question->id) }}" class="btn btn-small">Edit</a>
                    <a href="{{ route('home.question.delete', $question->id) }}" class="btn btn-small">Delete</a>
                    @endif
                </div>
            </div>
        </div><!--/.media .stream-->
        @endforeach
    </div>
    {{ $questions->links() }}
</div>
@endsection