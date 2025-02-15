<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function blogContents()
    {
        return $this->hasMany(BlogContent::class);
    }
    public function comments()
    {
        return $this->hasMany(Blog::class);
    }
}
