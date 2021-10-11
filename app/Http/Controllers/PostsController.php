<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    //
    public function showpost()
    {
        $posts = Post::all();
        return view('post', [
            'post' => $posts
        ]);
    }
}
