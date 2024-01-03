<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function viewpost()
    {
        return view('author.viewpost');
    }

    public function editpost()
    {
        return view('author.editpost');
    }
}
