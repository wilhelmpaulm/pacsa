@extends('layouts.scaffold')

@section('main')

<h1>Show Registration</h1>

<p>{{ link_to_route('registrations.index', 'Return to all registrations') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>School</th>
				<th>Address</th>
				<th>Head_delegate</th>
				<th>Mobile1</th>
				<th>Mobile2</th>
				<th>Email</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $registration->school }}}</td>
					<td>{{{ $registration->address }}}</td>
					<td>{{{ $registration->head_delegate }}}</td>
					<td>{{{ $registration->mobile1 }}}</td>
					<td>{{{ $registration->mobile2 }}}</td>
					<td>{{{ $registration->email }}}</td>
                    <td>{{ link_to_route('registrations.edit', 'Edit', array($registration->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('registrations.destroy', $registration->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop