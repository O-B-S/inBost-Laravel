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

    public function viewcategory($name){
        if (BlogCategory::where('name', $name)->exists()) {

            $category = BlogCategory::where('name', $name)->first();
            $post = Posts::where('cate_id', $category->id)->where('status', '1')->get();
            return view('frontend.category', compact('category', 'post'));
        }
        else {
            return redirect('/')->with('status', "cette categorie n'existe pas" );
        }
    }

    public function viewpost($category_name, $post_title) {
        if (BlogCategory::where('name', $category_name)->exists()) {
            if (Posts::where('title', $post_title)->exists()) {
                $post = Posts::where('title', $post_title)->first();
                $featured_post2 = BlogCategory::where('popular', '1')->get();
                $most_recent = Posts::latest()->take(5)->get();
                return view('frontend.viewpost', compact('post', 'featured_post2', 'most_recent'));
            }
            else{
                return redirect('/')->with('status', 'le lien à été rompu');
            }
        }
        else {
            return redirect('/')->with('status', "cette categorie n'existe pas");
        }
    }

    public function viewPostsdetails($post_title){
        
            if (Posts::where('title', $post_title)->exists()) {
                $post = Posts::where('title', $post_title)->first();
                $featured_post2 = BlogCategory::where('popular', '1')->get();
                $most_recent = Posts::latest()->take(5)->get();
                return view('frontend.viewpost', compact('post', 'featured_post2', 'most_recent'));
            }
            else{
                return redirect('/')->with('status', 'le lien à été rompu');
            }
    }
}
