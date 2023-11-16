<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Posts::all();
        return view('admin.blog.posts.index', compact('post'));
    }

    public function add(){
        $post = BlogCategory::all();
        return view('admin.blog.posts.add', compact('post'));
    }

    public function insert(Request $request){
        $post = new Posts();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets\uploads\posts',$filename);
            $post->image = $filename;
        }
        $post->cate_id = $request->input('cate_id');
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->description = $request->input('description');
        $post->save();
        return redirect('/admin/add-post')->with('status', 'poste ajoutée !');
    }
}
