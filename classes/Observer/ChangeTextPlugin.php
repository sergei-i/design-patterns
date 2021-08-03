<?php

namespace Observer;

class ChangeTextPlugin implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if (isset($subject->text)) {
            $subject->text .= ' Create event ';
        }
    }
}