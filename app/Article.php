<?php

namespace App;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','content','author'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
