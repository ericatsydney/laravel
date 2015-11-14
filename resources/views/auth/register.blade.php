@extends('app')

@section('content')

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Address
        <input type="address" name="address" value="{{ old('address') }}">
    </div>

    <div class="hidden">
        lat
        <input type="lat" name="lat" value="{{ old('lat') }}">
    </div>

    <div class="hidden">
        lng
        <input type="lng" name="lng" value="{{ old('lng') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
@stop