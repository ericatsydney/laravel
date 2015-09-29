<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  protected $dates = ['published_at'];

  protected $fillable = [
    'title',
    'content',
    'published_at',
    'user_id' //temporary!!
  ];

  public function scopePublished($query)
  {
    $query->where('published_at', '<=', Carbon::now());
  }

  public function scopeUnpublished($query)
  {
    $query->where('published_at', '>=', Carbon::now());
  }

  public function setTitleAttribute($value)
  {
    $this->attributes['title'] = $value;

    if (! $this->exists) {
      $this->attributes['slug'] = str_slug($value);
    }
  }

  public function setPublishedAtAttribute($date)
  {
    $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function tags()
  {
    return $this->belongsToMany('App\Tag')->withTimestamps();
  }

  public function tagsList()
  {
    return $this->tags->lists('id','id')->all();
  }
}
