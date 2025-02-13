<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Fashion;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    function index()
    {
        $blog = Blog::paginate(3);
        $blogs = Blog::where('categories', 'travel')->paginate(3);
        $topic = Blog::where('categories', 'topic')->paginate(3);
        $fashions = Blog::where('categories', 'fashion')->paginate(3);
        // $total_comments = Comment::count();
        $commentsCount = Comment::count();
        $formatComments = $commentsCount == 0 ? '0' : sprintf("%02d", $commentsCount);
        return view('index', compact('blogs', 'topic', 'fashions','blog','formatComments'));
    }

    function profil()
    {
        $user = Auth::user();
        return view('profie', compact('user'));
    }

    function create()
    {
        $data['blog'] = Blog::all();
        return view('create', $data);
    }

    function add(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:png,jpg,jpeg,',
            'title' => 'required|string',
            'description' => 'required|string',
            'categories' => 'required',
            'location' => 'required_if:categories,!fashion',
        ]);

        $filename = '';

        if ($request->hasfile('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $extfile;
            $request->file('foto')->storeAs('foto', $filename);
        }

        Blog::create([
            'id' => Str::uuid(),
            'foto' => $filename,
            'title' => $request->title,
            'categories' => $request->categories,
            'description' => $request->description,
            'location' => $request->location,
        ]);

        return redirect('/admin');
    }

    function edit(Request $request)
    {
        $data['blog'] = Blog::find($request->id);
        return view('update', $data);
    }

    function update(Request $request)
    {
        $filename = '';

        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $extfile;
            $request->file('foto')->storeAs('foto', $filename);
        }

        Blog::where('id', $request->id)->update([
            'foto' => $filename,
            'title' => $request->title,
            'categories' => $request->categories,
            'description' => $request->description,
            'location' => $request->location,
        ]);

        return redirect('/admin');
    }

    function delete(Request $request)
    {
        $blog = Blog::find($request->id);
        $delete = Blog::where('id', $request->id)->delete();

        if ($delete) {
            if ($blog->foto) {
                Storage::delete('foto/', $blog->foto);
            }
        }

        return redirect('/admin');
    }

    function detail(Request $request)
    {
        
        $data['blog'] = Blog::find($request->id);
        $data['comment'] = Comment::all();
        return view('detail', $data);
    }

    public function like($id)
    {
        $blog = Blog::findOrFail($id);
        $liked = false;

        // Periksa apakah pengguna telah menyukai blog ini
        if (Auth::check()) {
            if ($blog->likes->contains(Auth::user()->id)) {
                // Jika sudah like, hapus like
                $blog->likes()->detach(Auth::user()->id);
                $blog->decrement('likes_count');
            } else {
                // Jika belum like, tambahkan like
                $blog->likes()->attach(Auth::user()->id);
                $blog->increment('likes_count');
                $liked = true;
            }
        }

        return response()->json(['likes_count' => $blog->likes_count, 'liked' => $liked]);

        // return redirect()->back();
    }
}
