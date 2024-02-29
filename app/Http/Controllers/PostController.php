<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        // $posts = Post::latest()->get();
        return view('home', [
            'posts' => $posts,
        ]);
    }

    public function showPost(Post $post)
    {
        return view('post.post_page', [
            'post' => $post,
        ]);
    }

    public function postByAuthor(User $author)
    {
        $posts = $author->posts()->paginate(2);;
        return view('home', [
            'posts' => $posts,
        ]);
    }
    public function postByCategory(Category $category)
    {
        $posts = $category->posts()->paginate(2);
        return view('home', [
            'posts' => $posts,
        ]);
    }
}
