@extends('layouts.scaffold')

@section('main')

<h1>Show User</h1>

<p>{{ link_to_route('users.index', 'Return to all users') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Username</th>
				<th>Password</th>
				<th>Name</th>
				<th>Type</th>
				<th>Email</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $user->username }}}</td>
					<td>{{{ $user->password }}}</td>
					<td>{{{ $user->name }}}</td>
					<td>{{{ $user->type }}}</td>
					<td>{{{ $user->email }}}</td>
                    <td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop