<?php

namespace Observer;

class ChangeTitlePlugin implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if (isset($subject->title)) {
            $subject->title .= ' Create event ';
        }
    }
}