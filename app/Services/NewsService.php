<?php

namespace App\Services;

use App\Models\News;

class NewsService
{

    public function __construct(protected News $news)
    {
    }

    public function all()
    {
        return $this->news->get();
    }
    public function getNewsById($news)
    {
        return $this->news->findOrFail($news);
    }
    public function update($news, array $data)
    {
        $news = $this->getNewsById($news);
        return $news->update($data);
    }
    public function destroy($news)
    {
        $news = $this->getNewsById($news);
        $news->delete();
    }
}
