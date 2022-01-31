<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(Request $req)
    {
        $category = new Category();

        $category->title = $req->title;
        $category->slug = Str::slug($req->title);

        $category->save();
        return redirect('/admin/categories')->with('message', 'Created Successfuly');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $req, $id)
    {
        $category = Category::find($id);

        $category->title = $req->title;
        $category->slug = Str::slug($req->title);

        $category->update();
        return redirect('/admin/categories')->with('message', 'Updated Successfuly');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $posts = Post::where('category_id', $id)->get();
        foreach($posts as $post){
            $post->delete();
        }
        
        $category->delete();
        return redirect('/admin/categories')->with('message', 'Deleted Successfuly');
    }
}
