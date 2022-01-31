<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $cats = Category::all();
        $recentposts = Post::orderBy('id', 'desc')->get();
        $headposts = Post::orderBy('id', 'desc')->limit(5)->get();
        $posts1 = Post::orderBy('id', 'desc')->where('category_id', 1)->limit(5)->get();
        $posts2 = Post::orderBy('id', 'desc')->where('category_id', 2)->limit(5)->get();
        $posts3 = Post::orderBy('id', 'desc')->where('category_id', 3)->limit(5)->get();
        $posts4 = Post::orderBy('id', 'desc')->where('category_id', 4)->limit(2)->get();
        $posts = Post::orderBy('id', 'asc')->limit(5)->get();
        return view('welcome', ['cats' => $cats, 'recentposts' => $recentposts, 'headposts' => $headposts, 'posts1' => $posts1, 'posts2' => $posts2, 'posts3' => $posts3, 'posts4' => $posts4, 'posts' => $posts]);
    }

    public function viewcat($slug)
    {
        $cat = Category::where('slug', $slug)->first();
        $cats = Category::all();
        return view('category', ['cat' => $cat, 'cats' => $cats]);
    }

    public function viewpost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $posts = Post::where('category_id', $post->category_id)->limit(3)->get();
        return view('post', ['post' => $post, 'posts' => $posts]);
    }
}
