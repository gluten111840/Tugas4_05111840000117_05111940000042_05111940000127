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
    @foreach($questions as $key => $question)
    <div class="module">
        <div class="module-head">
            <h3>
            {{ $question->username }}'s Question</h3>
            <p>Created at : {{ $question->created_at }}</p>
        </div>
        <div class="module-body">
            <h2>{{ $question->title }}</h2>
            <p>{{ $question->question }}</p>
        </div>
        <div class="container">
            <a href="#" class="btn btn-warning">Answer</a>
            <a href="{{ route('edit', $question->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ route('delete', $question->id) }}" class="btn btn-danger">Delete</a>
        </div>
            
    </div>
    @endforeach
    {{ $questions->links() }}
</div>
@endsection