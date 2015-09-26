@extends('app')

@section('content')
    <h1> Edit {!! $blog->title !!}</h1>
    <hr/>
    {!! Form::model($blog, ['method' => 'PATCH', 'url' => 'blog/' . $blog->slug]) !!}
    <div clas="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null,['class' => 'form-control']) !!}
    </div>

    <div clas="form-group">
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content',null,['class' => 'form-control']) !!}
    </div>

    <div clas="form-group">
        {!! Form::label('published_at', 'Publish On:') !!}
        {!! Form::input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
    </div>
    <hr/>
    <div clas="form-group">
        {!! Form::submit('Update Blog',['class' => 'btn btn-primary form-control']) !!}
    </div>


    {!! Form::close() !!}
@Stop