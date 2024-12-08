<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use Staudenmeir\EloquentEagerLimit\HasEagerLimit;

class Post extends Model
{
    use HasFactory, HasEagerLimit;
    protected $fillable = ['title', 'slug', 'description', 'commetable', 'status', 'user_id', 'category_id'];



    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'post_id');
    }
    public function images() {
        return $this->hasMany(Image::class, 'post_id');
    }
}
