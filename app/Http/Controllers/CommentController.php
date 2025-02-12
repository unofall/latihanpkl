<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    function comment(Request $request){
        $data['blog'] = Blog::find($request->id);
        return view('comments', $data);
    }

    function addcomment(Request $request){
        $request->validate([
            'blog_id' => 'required|uuid|exists:blogs,id',
            'desc_comment' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->blog_id = $request->blog_id;
        $comment->user_id = Auth::id();
        $comment->desc_comment = $request->desc_comment;
        $comment->save();

        return redirect('/detail/'.$request->id);
        // return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }

}
