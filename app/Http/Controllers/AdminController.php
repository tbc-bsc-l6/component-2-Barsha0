<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function postmanagement()
    {
        $posts = Post::all();
        return view('admin.postmanagement', ['posts' => $posts]);
    }

    public function approve_post(Post $post, Request $request)
    {
        $post = Post::find($post->id);
        $post->post_status = 'approved';
        $post->save();

        return redirect()->route('post.postmanagement');
    }

    public function decline_post(Post $post)
    {
        $post = Post::find($post->id);
        $post->post_status = 'decline';
        $post->save();

        return redirect()->route('post.postmanagement');
    }

    public function usermanagement()
    {
        $users = User::all();
        return view('admin.usermanagement', ['users' => $users]);
    }

    public function approve_user(User $user, Request $request)
    {
        $user = User::find($user->id);
        $user->user_status = 'approved';
        $user->save();

        return redirect()->route('user.usermanagement');
    }


    public function decline_user(User $user)
    {
        $user = User::find($user->id);
        $user->user_status = 'decline';
        $user->save();

        return redirect()->route('user.usermanagement');
    }


}
