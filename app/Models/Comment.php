<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'user_name', 'user_email', 'content'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
