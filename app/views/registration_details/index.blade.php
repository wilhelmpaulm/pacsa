@extends('layouts.scaffold')

@section('main')

<h1>All Registration_details</h1>

<p>{{ link_to_route('registration_details.create', 'Add new registration_detail') }}</p>

@if ($registration_details->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Registration_no</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Type</th>
				<th>Contact</th>
				<th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($registration_details as $registration_detail)
                <tr>
                    <td>{{{ $registration_detail->registration_no }}}</td>
					<td>{{{ $registration_detail->name }}}</td>
					<td>{{{ $registration_detail->gender }}}</td>
					<td>{{{ $registration_detail->type }}}</td>
					<td>{{{ $registration_detail->contact }}}</td>
					<td>{{{ $registration_detail->email }}}</td>
                    <td>{{ link_to_route('registration_details.edit', 'Edit', array($registration_detail->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('registration_details.destroy', $registration_detail->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no registration_details
@endif

@stop