<?php

class GuestBook{
    protected array $book = [];
    protected string $path;

    public function __construct($path)
    {
        $this->path = $path;
        fopen($path, 'a+');
    }

    public function getData(): array
    {
        return $this->book = file($this->path);
    }

    public function append($text)
    {
        array_push($this->book, $text);
    }

    public function save()
    {
        file_put_contents($this->path, $this->book);
    }
}