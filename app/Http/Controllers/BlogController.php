<?php

namespace App\Http\Controllers;

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
    $this->middleware('auth', ['except' => ['index','show']]);
  }

  /**
   * @return \Illuminate\View\View
   *
   * This function will return the index view.
   */
  public function index()
  {
    $blogs = Blog::latest('published_at')->published()
      ->paginate(config('blog.posts_per_page'));

    return view('blog.index', compact('blogs'));
  }

  /**
   * @param Blog $blog
   * @return mixed
   *
   * This function will return the single blog view.
   */
  public function show(Blog $blog)
  {
    return view('blog.post')->withBlog($blog);
  }

  /**
   * @return \Illuminate\View\View
   *
   * This function will return the view to create blog.
   */
  public function create()
  {
    $tags = Tag::lists('name','id');
    return view('blog.create', compact('tags'));
  }

  /**
   * @param BlogRequest $request
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   *
   * This function will create blog to DB and show corresponding message.
   */
  public function store(BlogRequest $request)
  {
    $blog = Auth::user()->blogs()->create($request->all());

    $tagIds = $request->input('tags');

    $blog->tags()->attach($request->input('tags'));

    session()->flash('flash_message', 'Your blog has been created!');

    return redirect('blog');
  }

  /**
   * @param Blog $blog
   * @return \Illuminate\View\View
   *
   * This function will return the edit view.
   */
  public function edit(Blog $blog)
  {
    $tags = Tag::lists('name','id');
    return view('blog.edit', compact('blog','tags'));
  }

  /**
   * @param Blog $blog
   * @param BlogRequest $request
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   *
   * This function will save the update to DB.
   */
  public function update(Blog $blog, BlogRequest $request)
  {
    $blog->update($request->all());

    return redirect('blog');
  }
}