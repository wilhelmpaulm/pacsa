@extends('layouts.scaffold')

@section('main')

<h1>Edit Registration_detail</h1>
{{ Form::model($registration_detail, array('method' => 'PATCH', 'route' => array('registration_details.update', $registration_detail->id))) }}
    <ul>
        <li>
            {{ Form::label('registration_no', 'Registration_no:') }}
            {{ Form::input('number', 'registration_no') }}
        </li>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::textarea('name') }}
        </li>

        <li>
            {{ Form::label('gender', 'Gender:') }}
            {{ Form::text('gender') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type') }}
        </li>

        <li>
            {{ Form::label('contact', 'Contact:') }}
            {{ Form::text('contact') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('registration_details.show', 'Cancel', $registration_detail->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop