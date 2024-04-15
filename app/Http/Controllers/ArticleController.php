<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Helper\FileHelper;
use App\Http\Requests\ArticleRequest;
use App\Services\ArticleService;
use App\Services\VolumeService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct(protected ArticleService $articleService, protected VolumeService $volumeService)
    {
    }
    public function index()
    {
        $data = [
            'article' => $this->articleService->all(),
        ];
        return view('user.pages.articles', $data);
    }
    public function create()
    {
        $data = [
            'title_page' => 'Article',
            'articles' => $this->articleService->all(),
            'volumes' => $this->volumeService->all(),
        ];
        return view('administration.pages.article.index', $data);
    }
    public function store(ArticleRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('file')) {
            $data['file'] = FileHelper::uploadsImage('file', $request, 'document/article');
        }
        $this->articleService->store($data);
        return redirect()->back()->with('success', 'Article successfully added');
    }
    public function edit($article)
    {
        $data = [
            'title_page' => 'Edit Article',
            'volumes' => $this->volumeService->all(),
            'articles' => $this->articleService->all(),
            'article' => $this->articleService->getArticleById($article),
        ];
        return view('administration.pages.article.edit', $data);
    }
    public function show($article)
    {
        $data = [
            'title_page' => 'Article details',
            'articles' => $this->articleService->all(),
            'volumes' => $this->volumeService->all(),
            'article' => $this->articleService->getArticleById($article),
        ];
        return view('administration.pages.article.view', $data);
    }
    public function update(Request $request, $article)
    {
        $data = $request->all();
        $status = $request->input('status');
        if ($status === null || $status == StatusEnum::PENDING) {
            $data['status'] = StatusEnum::PENDING;
        } else {
            $data['status'] = StatusEnum::ACTIVATE;
        }
        $this->articleService->update($article, $data);
        return redirect()->route('article.create')->with('success', 'Article updated successfully');
    }
    public function destroy($article)
    {
        $this->articleService->destroy($article);
        return redirect()->route('article.create')->with('success', 'Article deleted successfully');
    }
}
