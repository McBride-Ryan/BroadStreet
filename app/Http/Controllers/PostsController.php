<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::with(['user','likes'])->simplePaginate(3);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'body'=>'required'
        ]);

        $request->user()->posts()->create([
            'body'=> $request->body
        ]);
        return back();
    }
}
