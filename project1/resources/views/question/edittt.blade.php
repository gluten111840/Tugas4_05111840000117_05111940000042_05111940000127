@extends('layout.detailq')
@section('title')
Edit Your Question
@endsection
@section('main')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>
                Edit Your Question</h3>
        </div>
        <div class="module-body">
            <form action="{{ route('update') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $questions->id }}">
                <h3 style="text-align: left;">Title</h3>
                <div class="form-group">
                    <input type="text" class="span8" name="title" value="{{ $questions->title }}">
                </div> 
                <h3 style="text-align: left;">Question</h3>
                <div class="form-group">
                    <input type="text" class="span8" name="question" value="{{ $questions->question }}">
                </div>
                <input type="submit" class="btn btn-info" value="Edit">
                <a role="button" class="btn btn-danger" href="../homeee">Back</a>
            </form>
            
        </div>
    </div>
</div>

@endsection