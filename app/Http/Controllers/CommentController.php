<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    // get all commments of a post
    public function index($id){
        $post = Post::find($id);

        if(!$post){
            return response([
                'message' => 'Post not found.'
            ]);
        }

        return response([
            'post' => $post->comments()->with('user:id,name,image')->get(),
        ],200);
    }

    // create a comment
    public function store(Request $request,$id){
        $post = Post::find($id);

        if(!$post){
            return response([
                'comment' => 'required|string',
            ]);
        }

        $attrs = $request->validate([
            'body' => 'required|string',
        ]);

        Comment::create([
            'comment' => $attrs['comment'],
            'post_id' => $id,
            'user_id' => auth()->user()->id,
        ]);

        return response([
            'post' => $post->comments()->with('user:id,name,image')->get(),
        ],200);
    }



    
}
