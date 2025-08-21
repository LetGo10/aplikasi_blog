<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'air terjun kanching',
                'content' => '',
                'created_at' => '',
                'author' => '',
                'author_info' => '',
                'image' => '',
                'category' => '',
            ],
            [
                'id' => 2,
                'title' => 'air terjun kanching',
                'content' => '',
                'created_at' => '',
                'author' => '',
                'author_info' => '',
                'image' => '',
                'category' => '',
            ],
            [
                'id' => 3,
                'title' => 'air terjun kanching',
                'content' => '',
                'created_at' => '',
                'author' => '',
                'author_info' => '',
                'image' => '',
                'category' => '',
            ]
        ];
    }*/

    protected $fillable = [
        'title',
        'content',
        'image',
        'category',
        'slug',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }
}
