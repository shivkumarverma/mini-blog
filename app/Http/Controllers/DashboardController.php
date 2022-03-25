<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function showPost(Request $req){
        // $post = Post::all();
        $userid = $req->user()->id;
        $posts = Post::where('user_id',$userid)->get();
        return view('dashboard',['posts' =>$posts]);
    }
}
