<?php

class View
{
    protected array $data = [];

    public function assign(string $name, string $value): void
    {
        $this->data[$name] = $value;
    }

    public function render(string $template): string
    {
        return file_get_contents($template);
    }

    public function display(string $template): void
    {
        echo $this->render($template);
    }
}