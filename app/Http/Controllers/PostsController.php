<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show($id)
    {
        $today = date('Y-m-d');
        $post = Post::find(1);
        return view("post", ["id" => $id, "today" => $today, "post" => $post]);
    }
}
