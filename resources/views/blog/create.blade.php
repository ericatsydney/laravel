@extends('app')

@section('content')
    <h1> Create a New blog</h1>
    <hr/>
    {!! Form::open(['url' => 'blog']) !!}
    <div clas="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null,['class' => 'form-control']) !!}
    </div>

    <div clas="form-group">
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content',null,['class' => 'form-control']) !!}
    </div>

    <div clas="form-group">
        {!! Form::submit('Add Article',['class' => 'btn btn-primary form-control']) !!}
    </div>


    {!! Form::close() !!}
@stop