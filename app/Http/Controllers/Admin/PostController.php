<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        return redirect('/admin/add-post')->with('status', 'poste ajouté !');
    }

    public function edit($id){
        $post = Posts::find($id);
        return view('admin.blog.posts.edit', compact('post'));
    }

    public function update(Request $request, $id){
        $post = Posts::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/posts/'.$post->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets\uploads\posts',$filename);
            $post->image = $filename;
        }
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->description = $request->input('description');
        $post->update();
        return redirect('/admin/post')->with('status', 'poste Modifié !');
    }

    public function destroy($id){
        $post = Posts::find($id);
        if($post->image)
        {
            $path = 'assets/uploads/posts/'.$post->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $post->delete();
        return redirect('/admin/post')->with('status', 'Poste Supprimée !');
    }
}
