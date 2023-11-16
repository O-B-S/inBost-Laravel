<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogCategoryController extends Controller
{
    public function index(){
        $category = BlogCategory::all();
        return view('admin.blog.categories.index', compact('category'));
    }

    public function add(){
        return view('admin.blog.categories.add');
    }

    public function insert(Request $request){
        $category = new BlogCategory();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets\uploads\category',$filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->save();
        return redirect('/admin/add-category')->with('status', 'Categorie ajoutée !');
    }

    public function edit($id){
        $category = BlogCategory::find($id);
        return view('admin.blog.categories.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = BlogCategory::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets\uploads\category',$filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->update();
        return redirect('/admin/blogs')->with('status', 'Categorie Modifiée !');
    }

    public function destroy($id){
        $category = BlogCategory::find($id);
        if($category->image)
        {
            $path = 'assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('/admin/blogs')->with('status', 'Categorie Supprimée !');
    }

}
