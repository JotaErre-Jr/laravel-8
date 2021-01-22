<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::get();
        dd($posts);

        /*return view('admin.posts.index',[
            'posts' => $posts
        ]);*/

        //função compact() imprimi array
        return view('admin.posts.inde', compact('post'));
    }
}
