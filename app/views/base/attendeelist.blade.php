@extends('layouts.registration')
@section('main')
<div class="well pad60">
    <h3>Attendee List</h3>
    <table  class="table table-bordered table-hover table-striped dtable">
        <thead>
            <tr>
                <th>id</th>
                <th>School</th>
                <th>Address</th>
                <th>gender</th>
                <th>mobile</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($r_d as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{Registration::find($r->registration_no)->school}}</td>
                <td>{{$r->name}}</td>
                <td>{{$r->gender}}</td>
                <td>{{$r->contact}}</td>
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