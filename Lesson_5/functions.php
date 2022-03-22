<?php

function getUsersList(): array
{
    return [
        'Antonyak' => '$2y$10$3kGgzS0UL06o.he3IDrrD.sMJZN/aQdx6QWq8h69h8yoOXpL3.Hku',
        'Permyakov' => '$2y$10$34yn//lfVSycKBWCoK060Ox1KQ1UZJRomlZ7sm6E/qaPh/Uvn8Avm'
    ];
}

function existsUser(string $login): bool
{
    return isset(getUsersList()[$login]);
}


function checkPassword(string $login,string $password): bool
{
    return (isset(getUsersList()[$login]) and (password_verify($password, getUsersList()[$login])));
}

function getCurrentUser(): ?string
{
    if (isset($_COOKIE['login'])) {
        return $_COOKIE['login'];
    }
    return null;
}

