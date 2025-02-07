<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Fashion;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    function index()
    {
        $blogs = Blog::where('categories', 'travel')->get();
        $topic = Blog::where('categories', 'topic')->get();
        $fashions = Blog::where('categories','fashion')->get();
        return view('index', compact('blogs','topic', 'fashions'));
    }

    function show()
    {
        $data['blog'] = Blog::all();
        return view('travel', $data);
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
            'location' => 'required|string',
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
        return view('detail', $data);
    }
}
