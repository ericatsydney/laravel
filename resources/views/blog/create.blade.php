@extends('app')

@section('content')
    <h1> Create a New blog</h1>
    <hr/>
    {!! Form::open(['url' => 'blog']) !!}
        @include('blog.form',['submitButtonText' => 'Add Blog'])

    {!! Form::close() !!}
    @include('errors.list')
@stop