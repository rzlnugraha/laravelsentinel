<?php

namespace App;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','content','author','images'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function img_article()
    {
        if (file_exists(public_path() . '/images/article/' . $this->images) && $this->images != null) {
            return '/images/article/'.$this->images;
        } else {
            return url('/img/afe.jpg');
        }
    }
}
