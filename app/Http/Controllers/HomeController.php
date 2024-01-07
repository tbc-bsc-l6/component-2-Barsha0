<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Post;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('home.homepage');
            }
            else if($usertype=='admin')
            {
                return view('admin.adminhome');
            }
            else if($usertype=='author')
            {
                return view('author.authorhome');
            }
            else
            {
                return redirect()->back();
            }
        }

    }
    public function post()
    {
        return view("post");
    }

    public function homepage()
    {
        return view('home.homepage');
    }

    public function header()
    {
        return view('home.header');
    }

    public function travels()
{
    $posts = Post::where('category', 'travel')->get();
    return view('home.travel', ['posts' => $posts]);
}

public function cars()
{
    $posts = Post::where('category', 'car')->get();
    return view('home.car', ['posts' => $posts]);
}


    public function sports()
    {
        $posts = Post::where('category', 'sport')->get();
        return view('home.sport',['posts' => $posts]);
    }

    public function lifestyle()
    {
        $posts = Post::where('category', 'lifestyle')->get();
        return view('home.lifestyle',['posts' => $posts]);
    }


    public function login()
    {
        return view('auth.login');
    }


    public function register()
    {
        return view('auth.register');
    }
}
