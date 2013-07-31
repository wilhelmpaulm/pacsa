@extends('layouts.registration')
@section('main')
<div class="span3 offset4 hero-unit  text-center">
    <h3>Login</h3><br>
    <form action="{{URL::to('login')}}" method="POST">
        <input type="text" name="username" value="" placeholder="username"/><br>
        <input type="password" name="password" value="" placeholder="password"/><br><br>
        <input type="submit" class="btn btn-inverse btn-large" value="Login" />
    </form>

</div>


@stop