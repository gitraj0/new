<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;


class homecontroller extends Controller
{
    public function show_post(){
        $posts = post::all();
        $posts = post::paginate();

        return view('home',['posts'=>$posts]);
    }
}
