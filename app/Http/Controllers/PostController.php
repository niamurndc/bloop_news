<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $posts = Post::all();
        return view('admin.post.index', ['posts' => $posts]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.post.add', ['categories' => $categories]);
    }

    public function store(Request $req)
    {
        $post = new Post();

        $post->title = $req->title;
        $post->body = $req->body;
        $post->category_id = $req->category_id;
        $post->slug = Str::slug($req->title);

        // add image
        $image = $req->file('cover');
        $ext = $image->getClientOriginalExtension();
        $cover = 'post-'.time().'.'.$ext;
        $post->image = $cover;
        $path = 'image/post';
        $image->move($path, $cover);

        $post->save();
        return redirect('/admin/posts')->with('message', 'Created Successfuly');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('admin.post.edit', ['post' => $post, 'categories' => $categories]);
    }

    public function update(Request $req, $id)
    {
        $post = Post::find($id);
        
        $post->title = $req->title;
        $post->body = $req->body;
        $post->category_id = $req->category_id;
        $post->slug = Str::slug($req->title);

        // add image
        $image = $req->file('cover');
        if($image != null){
            $ext = $image->getClientOriginalExtension();
            $cover = 'post-'.time().'.'.$ext;
            $post->image = $cover;
            $path = 'image/post';
            $image->move($path, $cover);
        }

        $post->update();
        return redirect('/admin/posts')->with('message', 'Updated Successfuly');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/admin/posts')->with('message', 'Deleted Successfuly');
    }
}
