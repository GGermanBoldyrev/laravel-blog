<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /*Метод для отображения всех постов*/
    public function index(): View
    {
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }

    /*Метод для отображения страницы создания поста*/
    public function create(): View
    {
        return view('post.create');
    }

    /*Post запрос на создание поста*/
    public function store(Request $request): RedirectResponse
    {
        $img = 'asd';
        $title = $request->input('title');
        $content = $request->input('content');
        $checkbox = $request->boolean('checkbox');

        /*if ($checkbox === true){
            return redirect('/posts/{$id}');
        }*/

        return redirect('/posts');
    }

    /*Метод для отображения конкретного поста*/
    public function show($id): View
    {
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
    public function destroy($id): RedirectResponse
    {
        return redirect('posts');
    }
}
