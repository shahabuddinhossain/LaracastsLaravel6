<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
/*        $posts = [
            'my-first-post'  => 'Hello! this is my first post!',
            'my-second-post' => 'Hello! this is my second post!',
        ];*/
        $post= \DB::table('posts')->where('slug',$slug)->first();

        return view('post', [
            'post'=>$post
        ]);
    }
}
