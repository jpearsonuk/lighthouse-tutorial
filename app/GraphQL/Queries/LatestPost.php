<?php

namespace App\Http\GraphQL\Queries;

use App\Models\Post;
use GraphQL\Type\Definition\ResolveInfo;

class LatestPost
{
    public function resolve($rootValue, array $args, $context, ResolveInfo $resolveInfo): Post
    {
        return Post::orderBy('published_at', 'DESC')->first();
    }
}
