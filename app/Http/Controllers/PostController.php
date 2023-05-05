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
        /*Валидируем данные*/
        $request->validate([
            'title' => ['required', 'unique:posts', 'min:8'],
            'content' => ['required', 'min:32']
        ]);

        /*Заполняем данные*/
        $filledData = [
            'img' => $request->filled('img') ? $request->input('img') : 'no-image.jpeg',
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ];

        /*Создаем в бд новую запись*/
        $post = Post::create($filledData);

        /*Проверяем на checkbox*/
        $checkbox = $request->boolean('checkbox');

        /*Если чекбокс стоит, то показываем страницу с постом*/
        if ($checkbox) {
            return redirect()->route('posts.show', ['post' => $post]);
        }

        /*Если чекбокс не стоит, редирект на страницу постов*/
        return redirect()->route('posts.index');
    }

    /*Метод для отображения конкретного поста*/
    public function show($id): View
    {
        $post = Post::find($id);
        return view('post.show', ['post' => $post]);
    }

    /*Метод для отображения страницы редактирования поста*/
    public function edit($id): View
    {
        $post = Post::find($id);
        return view('post.edit', ['post' => $post]);
    }

    /*Put или Patch запрос на редактирование поста*/
    public function update($id):RedirectResponse
    {
        return redirect()->route('posts.show', ['post' => $id]);
    }

    /*Метод для удаления поста*/
    public function destroy($id): RedirectResponse
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }
}
