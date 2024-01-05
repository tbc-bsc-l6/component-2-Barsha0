<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function postmanagement()
    {
        $posts = Post::all();
        return view('admin.postmanagement',['posts' => $posts]);
    }

}
