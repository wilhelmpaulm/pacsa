@extends('layouts.admin')
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
                <td>{{($r->created_at)}}</td>
                <td>{{$r->updated_at}}</td>
                <td><a id="" href="#registration{{$r->id}}" role="button" class="btn btn-info" data-toggle="modal">View</a></td>
                <td>
                    @if($r->status == "pending")  
                    <form action="approveregistration" method="POST">
                        <input type="hidden" name="id" value="{{$r->id}}" />
                        <input type="submit" class="btn btn-warning" value="Approve" />
                    </form>
                    @else
                    approved
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>

@foreach($registrations as $r)
<div id="registration{{$r->id}}" class="modal hide fade " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">
            {{$r->school}}
        </h3>
        <p>
            Number of Attendees : {{Registration_detail::where('registration_no', '=', $r->id)->get()->count()}}
        </p>

    </div>
    <div class="modal-body ">
        <table border="0" class="table table-bordered table-condensed table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>gender</th>
                    <th>type</th>
                    <th>contact</th>
                </tr>
            </thead>
            <tbody>
                @foreach(Registration_detail::where('registration_no', '=', $r->id)->get() as $rd)
                <tr>
                    <td>{{$rd->name}}</td>
                    <td>{{$rd->gender}}</td>
                    <td>{{$rd->type}}</td>
                    <td>{{$rd->contact}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button> 
        
    </div>
</div>
@endforeach

<script>
    $(".dtable").dataTable();
</script>


@stop