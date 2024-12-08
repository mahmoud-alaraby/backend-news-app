<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use Staudenmeir\EloquentEagerLimit\HasEagerLimit;

class Category extends Model
{
    use HasFactory, HasEagerLimit;



    protected $fillable = ['id', 'name', 'slug', 'status'];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
