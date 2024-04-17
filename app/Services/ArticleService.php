<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Str;

class ArticleService
{

    public function __construct(protected Article $article, protected VolumeService $volumeService)
    {
    }
    public function all()
    {
        return $this->article->latest()->get();
    }
    public function getArticleById($article)
    {
        return $this->article->findOrFail($article);
    }
    public function getEditorPicksArticle(){
        $latestVolume = $this->volumeService->getLatestVolume();
        return $this->article->where('volume_id', $latestVolume->id)->with('volume')->latest()->paginate(2);
    }
    public function getPopularArticle(){
        return $this->article->orderBy('popularity', 'desc')->take(2)->get();
    }
    public function getArticleBySlug($article){
        return $this->article->where('slug', $article)->first();
    }
    public function store(array $data)
    {
        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
            $data['publish_date'] = now();
        }
        return $this->article->create($data);
    }
    public function update($article, array $data)
    {
        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        $article = $this->getArticleById($article);
        return $article->update($data);
    }
    public function destroy($article)
    {
        $article = $this->getArticleById($article);
        $article->delete();
    }


}
