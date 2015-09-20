<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Carbon\Carbon;
use Request;

class BlogController extends Controller
{
  public function index()
  {
    $posts = Post::where('published_at', '<=', Carbon::now())
      ->orderBy('published_at', 'desc')
      ->paginate(config('blog.posts_per_page'));

    return view('blog.index', compact('posts'));
  }

  public function showPost($slug)
  {
    $post = Post::whereSlug($slug)->firstOrFail();

    return view('blog.post')->withPost($post);
  }

  public function create()
  {
    return view('blog.create');
  }

  public function store()
  {
    $input = Request::all();
    $input['published_at'] = Carbon::now();

    Post::create($input);

    return redirect('blog');
  }
}