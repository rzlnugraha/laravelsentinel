<?php

namespace App;
use App\Article;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'article_id', 'content', 'user'
    ];

    public static function valid()
    {
        return array(
            'user' => 'required|min:4',
            'content' => 'required'
        );
    }
    
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
