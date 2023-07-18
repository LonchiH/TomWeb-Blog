<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['author', 'title', 'body'];

    public function getExcerptAttribute()
    {
        return Str::limit($this->body, 40);
    }
}
