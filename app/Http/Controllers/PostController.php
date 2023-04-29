<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    /*Метод для отображения всех постов*/
    public function index(): View
    {
        /*Все посты*/
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }

    /*Метод для отображения страницы создания поста*/
    public function create(): View
    {
        return view('post.create');
    }

    /*Post запрос на создание поста*/
    public function store()
    {
        return 'Post query';
    }

    /*Метод для отображения конкретного поста*/
    public function show($id): View
    {
        /*Ищем пост по id*/
        $post = Post::find($id);
        return view('post.show', ['post' => $post]);
    }

    /*Метод для отображения страницы редактирования поста*/
    public function edit($id)
    {
        return "Edit post $id";
    }

    /*Put или Patch запрос на редактирование поста*/
    public function update($id)
    {
        return "Post $id update";
    }

    /*Метод для удаления поста*/
    public function destroy($id)
    {
        return "Delete post $id";
    }
}
