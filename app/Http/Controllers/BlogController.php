<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // 10MB limit
        ]);

        $coverPhotoPath = null;

        if ($request->hasFile('cover_photo')) {
            $coverPhotoPath = $request->file('cover_photo')->store('blog_covers', 'public');
        }

        Blog::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'cover_photo' => $coverPhotoPath,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }
}
