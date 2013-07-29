@extends('layouts.scaffold')

@section('main')

<h1>Edit Registration</h1>
{{ Form::model($registration, array('method' => 'PATCH', 'route' => array('registrations.update', $registration->id))) }}
    <ul>
        <li>
            {{ Form::label('school', 'School:') }}
            {{ Form::textarea('school') }}
        </li>

        <li>
            {{ Form::label('address', 'Address:') }}
            {{ Form::textarea('address') }}
        </li>

        <li>
            {{ Form::label('head_delegate', 'Head_delegate:') }}
            {{ Form::textarea('head_delegate') }}
        </li>

        <li>
            {{ Form::label('mobile1', 'Mobile1:') }}
            {{ Form::text('mobile1') }}
        </li>

        <li>
            {{ Form::label('mobile2', 'Mobile2:') }}
            {{ Form::text('mobile2') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('registrations.show', 'Cancel', $registration->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop