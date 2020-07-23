@extends('layout.detailq')
@section('title')
Home
@endsection
@section('main')
<div class="content">
    @foreach($questions as $key => $question)
    <div class="module">
        <div class="module-head">
            <h3>
            {{ Auth::user()->username ?? ''}}'s Question</h3>
        </div>
        <div class="module-body">
            <h2>{{ $question->title }}</h2>
            <p>{{ $question->question }}</p>
        </div>
        <div class="container">
            <a href="#" class="btn btn-warning">Answer</a>
        </div>
            
    </div>
    @endforeach
</div>
@endsection