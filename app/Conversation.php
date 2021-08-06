<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
  public $guarded = [];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function comments()
  {
    return $this->hasMany('App\Comment');
  }
}
