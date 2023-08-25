<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'posts.index',
            [
                'posts' => [
                    ['title' => 'Post 1', 'content' => 'Post 1 Content'],
                    ['title' => 'Post 2', 'content' => 'Post 2 Content'],
                    ['title' => 'Post 3', 'content' => 'Post 3 Content'],
                    ['title' => 'Post 4', 'content' => 'Post 4 Content'],
                    ['title' => 'Post 5', 'content' => 'Post 5 Content'],
                ]
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'posts.create',
            [
                'posts' => 'Create Post'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view(
            'posts.show',
            [
                'postId' => $id
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view(
            'posts.edit',
            [
                'postId' => $id
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
