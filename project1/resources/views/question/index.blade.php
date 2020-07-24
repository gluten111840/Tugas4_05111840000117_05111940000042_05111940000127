@extends('layout.detailq')
@section('title')
Ask Your Question Here!
@endsection
@section('main')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>
                Ask Your Question Here!</h3>
        </div>
        <div class="module-body">
            <form action="{{ route('home.question.store') }}" method="POST">
                @csrf
                <h3 style="text-align: left;">Title</h3>
                <div class="form-group">
                    <input type="text" class="span8" name="title" placeholder="input your title here">
                </div> 
                <h3 style="text-align: left;">Question</h3>
                <div class="form-group">
                    <textarea class="span8" name="question" rows="10" placeholder="input your question here"></textarea>
                </div>
                <input type="submit" class="btn btn-info" value="Submit">
                <a role="button" class="btn btn-danger" href="{{ route('home.tampil') }}">Back</a>
            </form>
            
        </div>
    </div>
</div>
@endsection