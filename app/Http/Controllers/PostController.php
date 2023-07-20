<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use PDF;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //no create route since drawer was used
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }


    public function generatePDF($id)
    {
        $post = Post::findOrFail($id);

        //ignore the error
        $pdf = PDF::loadView('pdf', compact('post'));

        return $pdf->download($post->author. '.pdf');
    }
}
