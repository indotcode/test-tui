<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return view('dashboard.news.index', ['news' => $news]);
    }

    public function create()
    {
        return view('dashboard.news.create');
    }

    public function store(NewsRequest $request)
    {
        $news_post = News::create([
            'title' => $request->post('title'),
            'content' => $request->post('content'),
            'id_user' => auth()->user()->id
        ]);

        $message = 'Новасть "'.$news_post->title.'" успешно сохранена!!!';

        return redirect()->route('dashboard.news.create')->with('message', $message);
    }
}
