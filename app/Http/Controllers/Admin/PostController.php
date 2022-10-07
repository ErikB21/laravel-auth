<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4|max:255',
            'slug' => 'required|min:4|max:7!unique',
            'description' => 'required|max:65535'
        ],
        [
            'slug.required' => 'Il campo slug non è stato compilato a dovere.'
        ]
    );
        $data = $request->all();
        $newPost = new Post();
        $newPost->fill($data);
        $newPost->save();
        return redirect()->route('admin.posts.index')->with('success', 'Hai creato un post correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:4|max:255',
            'slug' => 'required|min:4|max:7',
            'description' => 'required|max:65535'
        ],
        [
            'slug.required' => 'Il campo slug non è stato compilato a dovere.'
        ]
    );
        $data = $request->all();
        $post->update($data);
        $post->save();
        return redirect()->route('admin.posts.show', compact('post'))->with('warning', 'Hai modificato il post correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('danger', 'Hai eliminato il post correttamente');
    }
}
