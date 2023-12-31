<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

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
        return view('home.travel');
    }

    public function cars()
    {
        return view('home.car');
    }

    public function sports()
    {
        return view('home.sport');
    }

    public function lifestyle()
    {
        return view('home.lifestyle');
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
