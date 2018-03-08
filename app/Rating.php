<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = ['rating', 'rateable_id', 'user_id'];

    /**
     * @return mixed
     */
    public function rateable()
    {
        return $this->morphTo();
    }

    /**
     * Rating belongs to a user.
     *
     * @return User
     */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }


    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function rating()
    {
      return $this->hasMany(Rating::class);
    }
}
