<?php

namespace Observer;

class Blog implements \SplSubject
{
    public string $title;

    public string $text;

    private array $observers = [];

    public function __construct()
    {
        $this->observers['all'] = [];
    }

    public function attach(\SplObserver $observer, string $event = 'all'): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
        $this->observers[$event][] = $observer;
    }

    public function detach(\SplObserver $observer, string $event = 'all'): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
        $observers = array_merge($this->observers[$event], $this->observers['all']);

        foreach ($observers as $key => $item) {
            if ($observer === $item) {
                unset($observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = 'all'): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
        $observers = array_merge($this->observers[$event], $this->observers['all']);

        foreach ($observers as $key => $item) {
            $item->update($this);
        }
    }

    public function create(): void
    {
        echo 'create';
        $this->notify('blog:create');
    }

    public function update(): void
    {
        echo 'update';
        $this->notify('blog:update');
    }

    public function delete(): void
    {
        echo 'delete';
        $this->notify('blog:delete');
    }
}