<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    /*Метод для отображения всех постов*/
    public function index()
    {
        return view('post.index');
    }

    /*Метод для отображения страницы создания поста*/
    public function create()
    {
        return 'Create post';
    }

    /*Post запрос на создание поста*/
    public function store()
    {
        return 'Post query';
    }

    /*Метод для отображения конкретного поста*/
    public function show($id)
    {
        return "Post number $id";
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
