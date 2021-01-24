<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Post;
>>>>>>> e103c649e25e78f6e15689bb92394d283f892e49
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
<<<<<<< HEAD
        return view('admin.posts.index');
=======

        $posts = Post::get();

        /*return view('admin.posts.index',[
            'posts' => $posts
        ]);*/

        //função compact() imprimi array
        return view('admin.posts.index', compact('posts'));
>>>>>>> e103c649e25e78f6e15689bb92394d283f892e49
    }
}
