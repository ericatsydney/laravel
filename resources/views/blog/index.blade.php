@extends('app')
@section('content')
<h1>{{ config('blog.title') }}</h1>
<h5>Page {{ $blogs->currentPage() }} of {{ $blogs->lastPage() }}</h5>
<hr>
<ul>
    @foreach ($blogs as $blog)
        <li>
            <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
            <em>({{ $blog->published_at->format('M jS Y g:ia') }})</em>
            <p>
                {{ str_limit($blog->content) }}
            </p>
        </li>
    @endforeach
</ul>
<hr>
{!! $blogs->render() !!}
@stop