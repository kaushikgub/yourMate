<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use Session;

class PostController extends Controller
{
    public function savePost(Request $request){
        $request->validate([
            'title' => 'required|max:255|unique:posts',
            'post' => 'required'
        ]);

        $post = new Post();
        $post->user_id = Session::get('userId');
        $post->title = $request['title'];
        $post->key_word = $request['key_word'];
        $post->post = $request['post'];
        $post->save();

        return redirect('user/review');
    }
}
