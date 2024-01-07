<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class AuthorController extends Controller
{

    public function post_page()
    {
        return view('author.post_page');
    }

    public function add_post(Request $request)
    {

        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;


        $post = new POST;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category = $request->category;
        $post->post_status = 'active';
        $post->user_id = $request->$user_id;
        $post->name = $request->$name;
        $post->usertype = $request->$usertype;


        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }

        $post->save();

        return redirect()->back()->with('message', 'Post added successfully.');

    }

    public function viewpost()
    {
        $posts = Post::all();
        return view('author.viewpost', ['posts' => $posts]);
    }

    public function editpost(Post $post)
    {
        return view('author.editpost', ['post' => $post]);
    }

    public function updatepost(Post $post, Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('postimage'), $imageName);
            $post->image = $imageName;
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category = $request->category;
        $post->update($data);
        return redirect(route('post.view'))->with('message', 'Post updated sucessfully');
    }

    public function delete_post(Post $post)
    {
        $post->delete();
        return redirect(route('post.view'))->with('success', 'Post deleted successfuly');
    }


}
