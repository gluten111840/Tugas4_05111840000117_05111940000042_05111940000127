@extends('layout.master')
@section('title')
Create Test
@endsection
@section('main')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>
                Add Your Question Here!</h3>
        </div>
        <div class="module-body">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <h3 style="text-align: left;">Title</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="input your title here">
                </div> 
                <h3 style="text-align: left;">Question</h3>
                <div class="form-group">
                    <textarea class="form-control" name="question" rows="10" placeholder="input your question here"></textarea>
                </div>
                <input type="submit" class="btn btn-info" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection