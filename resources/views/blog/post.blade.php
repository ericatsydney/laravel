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

    @unless($blog->tags->isEmpty())
        <h5>Tags:</h5>
        <ul>
            @foreach($blog->tags as $tag)
                <li> {{$tag->name}}</li>
            @endforeach
        </ul>
    @endunless
@stop