<?php

namespace App\Http\Controllers\FrontEnd;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('images')->latest()->paginate(9);
        $most_viewd_posts = Post::orderBy('views', 'desc')->limit(3)->get();
        $oldest = Post::oldest()->take(3)->get();
        $popular = Post::withCount('comments')->orderBy('comments_count', 'desc')->take(3)->get();



        $categoriesWithSlider = Category::with(['posts' => function ($query) {
                $query->where(['status' => StatusEnum::ACTIVE])->limit(4);
            }])
            ->where(['status' => StatusEnum::ACTIVE])
            ->limit(4)
            ->get();







        return $categoriesWithSlider; // view('FrontEnd.Pages.Home.index', compact('posts', 'most_viewd_posts', 'oldest', 'popular', 'categoriesWithSlider'));
    }
}
