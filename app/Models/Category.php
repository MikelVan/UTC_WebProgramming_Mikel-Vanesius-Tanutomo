<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    public function post(): hasOne{
        return $this->hasOne(Post::class);
    }
}
