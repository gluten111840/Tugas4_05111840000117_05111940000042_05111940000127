@extends('layout.master')
@section('title')
Create Test
@endsection
@section('main')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>
                DataTables</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0"
                class="datatable-1 table table-bordered table-striped	 display" width="100%">
                <thead>
                    <tr>
                        <th>
                            Rendering engine
                        </th>
                        <th>
                            Browser
                        </th>
                        <th>
                            Platform(s)
                        </th>
                        <th>
                            Engine version
                        </th>
                        <th>
                            CSS grade
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX">
                        <td>
                            Trident
                        </td>
                        <td>
                            Internet Explorer 4.0
                        </td>
                        <td>
                            Win 95+
                        </td>
                        <td class="center">
                            4
                        </td>
                        <td class="center">
                            X
                        </td>
                    </tr>
                    <tr class="even gradeC">
                        <td>
                            Trident
                        </td>
                        <td>
                            Internet Explorer 5.0
                        </td>
                        <td>
                            Win 95+
                        </td>
                        <td class="center">
                            5
                        </td>
                        <td class="center">
                            C
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            Rendering engine
                        </th>
                        <th>
                            Browser
                        </th>
                        <th>
                            Platform(s)
                        </th>
                        <th>
                            Engine version
                        </th>
                        <th>
                            CSS grade
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection