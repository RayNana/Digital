<?php
class PostController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        return View::make('post.index', ['posts' => $posts]);
    }
    
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return View::make('post.show', ['post' => $post]);
    }
}