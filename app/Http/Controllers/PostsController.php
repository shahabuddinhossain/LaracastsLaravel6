<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

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
/*        $post= \DB::table('posts')->where('slug',$slug)->first();

        if (! $post) {
            abort(404);
        }*/
            $post = post::where('slug',$slug)->firstOrFail();

        return view('post', [
            'post'=>$post
        ]);
    }
}
