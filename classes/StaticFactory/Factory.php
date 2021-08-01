<?php

namespace StaticFactory;

class Factory implements IFactory
{
    public function echo(): void
    {
        echo 'Echo some information...';
    }
}