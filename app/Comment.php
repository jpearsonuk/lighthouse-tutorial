<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    //Comment belongs to a post (post 1 : n comments)
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
