<?php

namespace Prototype;

class User
{
    private string $firstName;

    private array $posts = [];

    public function __construct(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function addPost(Post $post): void
    {
        $this->posts[] = $post;
    }
}