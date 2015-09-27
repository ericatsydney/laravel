@extends('app')

@section('content')
    <h1> Edit {!! $blog->title !!}</h1>
    <hr/>
    {!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogController@update',$blog->slug]]) !!}
        @include('blog.form',['submitButtonText' => 'Update Blog'])

    {!! Form::close() !!}

    @include('errors.list')
@Stop