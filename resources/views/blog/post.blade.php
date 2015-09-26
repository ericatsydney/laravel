@extends('app')
@section('content')
    <h1>{{ $blog->title }}</h1>
    <h5>{{ $blog->published_at->format('M jS Y g:ia') }}</h5>
    <hr>
    {!! nl2br(e($blog->content)) !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
        « Back
    </button>
@stop