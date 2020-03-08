<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title',
        'content',
        'image',
        'like',
        'category_id',
        'user_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
