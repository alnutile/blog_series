@extends('layout')

@section('content')
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input class="form-control" type="password" name="password" id="password">
    </div>

    <div>
        <input class="form-control" type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button class="btn btn-success" type="submit">Login</button>
    </div>
</form>
@endsection