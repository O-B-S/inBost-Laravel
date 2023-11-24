<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Posts;

class BlogFrontendController extends Controller
{
    public function index(){
        $featured_post = Posts::where('status', '1')->take(15)->get();
        $featured_post2 = BlogCategory::where('popular', '1')->get();
        $most_recent = Posts::latest()->take(5)->get();
        return view('/blog', compact('featured_post', 'featured_post2', 'most_recent'));
    }
}
