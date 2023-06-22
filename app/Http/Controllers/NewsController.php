<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->getNews();
        return view('news.index', [
            'newsList' => $news
        ]);
    }

    public function show(int $id)
    {
        $news = $this->getNews($id);
        return view('news.show', [
            'news' => $news
        ]);
    }
    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        dd($request->all());

    }
}
