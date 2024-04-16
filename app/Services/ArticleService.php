<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{

    public function __construct(protected Article $article, protected VolumeService $volumeService)
    {
    }
    public function all()
    {
        return $this->article->get();
    }
    public function getArticleById($article)
    {
        return $this->article->findOrFail($article);
    }
    public function getEditorPicksArticle(){
        $latestVolume = $this->volumeService->getLatestVolume();
        return $this->article->where('volume_id', $latestVolume->id)->with('volume')->get();
    }
    public function getPopularArticle(){
        return $this->article->orderBy('popularity', 'desc')->get();
    }
    public function store(array $data)
    {
        if ($data) {
            $data['publish_date'] = now();
        }
        return $this->article->create($data);
    }
    public function update($article, array $data)
    {
        $article = $this->getArticleById($article);
        return $article->update($data);
    }
    public function destroy($article)
    {
        $article = $this->getArticleById($article);
        $article->delete();
    }
}
