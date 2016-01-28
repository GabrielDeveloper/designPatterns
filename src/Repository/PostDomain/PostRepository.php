<?php

namespace App\Repository\PostDomain;

class PostRepository
{

    public $storage;
    
    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }
}
