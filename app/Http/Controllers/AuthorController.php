<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class AuthorController extends Controller
{
    public function viewpost()
    {
        $posts = Post::all();
        return view('author.viewpost',['posts' => $posts]);
    }

    public function editpost(Post $post)
    {
        return view('author.editpost',['post' => $post]);
    }

    public function updatepost(Post $post, Request $request)
    {
        $data = $request -> validate([
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'required'
        ]);
        $post -> update($data);
        return redirect(route('post.view'))->with('message', 'Post updated sucessfully');
    }

}
