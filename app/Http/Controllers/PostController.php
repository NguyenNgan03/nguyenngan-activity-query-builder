<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{

    public function getAllPosts()
    {
        $posts = DB::table('posts')->get();
        return $posts;
    }

    public function getOnePost()
    {
        $post = DB::table('posts')->where('id', 10)->first();
        return $post;
    }

}
