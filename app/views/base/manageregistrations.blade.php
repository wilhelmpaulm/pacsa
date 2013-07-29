@extends('layouts.base')
@section('main')
<div class="well pad60">
    <h3>Registration List</h3>
    <table  class="table table-bordered table-hover table-striped dtable">
        <thead>
            <tr>
                <th>id</th>
                <th>School</th>
                <!--<th>Address</th>-->
                <th>Head Delegate</th>
                <th>mobile</th>
                <th>email</th>
                <th>status</th>
                <th>date created</th>
                <th>date approved</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->school}}</td>
                <!--<td>{{$r->address}}</td>-->
                <td>{{$r->head_delegate}}</td>
                <td>{{$r->mobile1}}</td>
                <td>{{$r->email}}</td>
                <td>{{$r->status}}</td>
                <td>{{$r->created_at}}</td>
                <td>{{$r->updated_at}}</td>
                <td>
                  @if($r->status == "pending")  
                    <form action="approveregistration" method="POST">
                        <input type="hidden" name="id" value="{{$r->id}}" />
                        <input type="submit" class="btn" value="Approve" />
                    </form>
                  @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>

<script>
    $(".dtable").dataTable();
</script>


@stop