<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use App\Tag;
use Carbon\Carbon;
use Auth;
use App\Http\Requests\BlogRequest;
use Session;
class BlogController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => 'index']);
  }
  public function index()
  {
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
    $tags = Tag::lists('name','id');
    return view('blog.create', compact('tags'));
  }

  public function store(BlogRequest $request)
  {
    $blog = Auth::user()->blogs()->create($request->all());

    $tagIds = $request->input('tags');

    $blog->tags()->attach($request->input('tags'));

    session()->flash('flash_message', 'Your blog has been created!');

    return redirect('blog');
  }

  public function edit($slug)
  {
    $tags = Tag::lists('name','id');
    $blog = Blog::whereSlug($slug)->firstOrFail();
    return view('blog.edit', compact('blog','tags'));
  }

  public function update($slug, BlogRequest $request)
  {
    $blog = Blog::whereSlug($slug)->firstOrFail();

    $blog->update($request->all());

    return redirect('blog');
  }
}