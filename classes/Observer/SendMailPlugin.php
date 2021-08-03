<?php

namespace Observer;

class SendMailPlugin implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        echo 'Mail sent';
    }
}