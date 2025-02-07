<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Fashion;
use App\Models\Topic;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function show(){
        $data['blog'] = Blog::all();
        return view('main',$data);
    }

    
}
