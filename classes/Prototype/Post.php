<?php

namespace Prototype;

class Post implements IPost
{
    private string $title;

    private string $text;

    private User $user;

    private array $comments = [];

    private \DateTime $createdAt;

    public function __construct(string $title, string $text, User $user)
    {
        $this->title = $title;
        $this->text = $text;
        $this->user = $user;
        $this->createdAt = new \DateTime();

        $this->user->addPost($this);
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function __clone()
    {
        $this->title = $this->title . ' copied';
        $this->user->addPost($this);
        $this->comments = [];
        $this->createdAt = new \DateTime();
    }
}