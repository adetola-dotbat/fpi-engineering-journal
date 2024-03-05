<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{

    public function __construct(protected Article $article)
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
