<?php

class News
{
    protected array $articles = [];

    public function addArticle(Article $article)
    {
        $this->articles[] = $article;
        $file = fopen(__DIR__ . '/data.txt', 'a');
        fwrite($file, $article->article . "\n");
        fclose($file);
    }

    public function getArticles(): array
    {
        return file(__DIR__ . '/data.txt');
    }
}