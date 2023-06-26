<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\News;


class NewsController extends Controller
{
    public function index()
    {
        $model = new News();
        dd($model->getNews());
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
