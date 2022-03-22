<?php

class Article
{
    public string $article;

    public function __construct($article)
    {
        $this->article = $article;
    }
}