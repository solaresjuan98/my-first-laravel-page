<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        //$posts = Post::get();
        //$post = Post::first();
        //$post = Post::find(25);


        //dd($post);

        $posts = Post::latest()->paginate();

        // dd($posts);


        // * fake query to database
        // $posts = [
        //     ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        //     ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
        // ];

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {

        $post = $post;

        return view('post', ['post' => $post]);
    }
}
