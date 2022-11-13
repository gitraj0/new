<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class Dashboard extends Controller
{
    public function show_post( Request $request){
        // $posts = post::all();
        $userid = $request->user()->id;
        $posts = post::where('user_id',$userid)->get();
        return view('dashboard',['posts'=>$posts]);
    }
}
