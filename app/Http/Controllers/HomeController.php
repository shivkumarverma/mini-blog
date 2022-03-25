<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function showPost(){
        $posts = Post::paginate(6);
        return view('home',['posts' => $posts]);
    }
}
