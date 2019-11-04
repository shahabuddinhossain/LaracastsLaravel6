<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'my-first-post'  => 'Hello! this is my first post!',
            'my-second-post' => 'Hello! this is my second post!',
        ];

        if (! array_key_exists($post,$posts)) {
            abort(404,'Sorry! Post not found');
        }

        return view('post', [
            'post'=>$posts[$post]
        ]);
    }
}
