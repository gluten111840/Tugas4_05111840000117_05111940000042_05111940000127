@extends('layout.detailq')
@section('title')
detail question
@endsection
@section('main')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>DataTables</h3>
        </div>
        <div class="module-body table">
            <table class="text-capitalize" cellpadding="0" cellspacing="0" border="0"
                class="datatable-1 table table-bordered table-striped	 display" width="100%">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th >
                            title question
                        </th>
                        <th>
                            question
                        </th>
                        <th>
                            create at
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($questions as $question)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            <a href="{{ route('home.question.show', $question->id) }}" style="text-decoration: none;">
                                {{ $question->title}}
                            </a>
                        </td>
                        <td>
                            {{ $question->question }}
                        </td>
                        <td>
                            {{ $question->created_at }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
