<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'title',
        'content',
        'user_id',
        'is_active',
    ];


}
