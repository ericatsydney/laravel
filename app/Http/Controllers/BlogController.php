<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use Carbon\Carbon;
use Request;

class BlogController extends Controller
{
  public function index()
  {
    return \Auth::user();
    $blogs = Blog::latest('published_at')->published()
      ->paginate(config('blog.posts_per_page'));

    return view('blog.index', compact('blogs'));
  }

  public function show($slug)
  {
    $blog = Blog::whereSlug($slug)->firstOrFail();
    return view('blog.post')->withBlog($blog);
  }

  public function create()
  {
    return view('blog.create');
  }

  public function store()
  {
    Blog::create(Request::all());

    return redirect('blog');
  }

  public function edit($slug)
  {
    $blog = Blog::whereSlug($slug)->firstOrFail();
    return view('blog.edit', compact('blog'));
  }

  public function update($slug)
  {
    $blog = Blog::whereSlug($slug)->firstOrFail();

    $blog->update(Request::all());

    return redirect('blog');
  }
}