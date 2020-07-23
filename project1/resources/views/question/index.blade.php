@extends('layout.deatilq')
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
            <form action="{{ route('store') }}" method="POST">
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
            </form>
            
        </div>
    </div>
</div>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="scripts/common.js" type="text/javascript"></script>
@endsection