@extends('layouts.base')
@section('main')
<div class="well pad60">
    <h3>Registration List</h3>
    <table  class="table table-bordered table-hover table-striped dtable">
        <thead>
            <tr>
                <th>id</th>
                <th>School</th>
                <th>Address</th>
                <th>Head Delegate</th>
                <th>mobile</th>
                <th>email</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->school}}</td>
                <td>{{$r->address}}</td>
                <td>{{$r->head_delegate}}</td>
                <td>{{$r->mobile1}}</td>
                <td>{{$r->email}}</td>
                <td>{{$r->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>

<script>
    $(".dtable").dataTable();
</script>


@stop