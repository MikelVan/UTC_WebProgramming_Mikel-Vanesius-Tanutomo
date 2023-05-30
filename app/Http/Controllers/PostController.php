<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use File;

class PostController extends Controller
{
    public function index(){
        $highlighted_post = Post::orderByDesc('views')->take(1)->get()[0];
        $latest_posts = Post::latest()->take(4)->get();
        $all_posts = Post::paginate(3);
        return view('home', compact('highlighted_post', 'latest_posts', 'all_posts'));
    }

    public function detail(Post $post){
        $post->increment('views');
        return view('post-detail', compact('post'));
    }
}
