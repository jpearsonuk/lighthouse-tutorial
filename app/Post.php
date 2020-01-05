<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    //Post belongs to a user (user 1 : n posts)
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Post Can have many comments (post 1 : n comments)
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
