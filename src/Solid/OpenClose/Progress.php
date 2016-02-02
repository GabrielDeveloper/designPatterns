<?php

namespace App\Solid\OpenClose;

class Progress
{

    private $content;
    
    public function __construct(Download $content)
    {
        $this->content = $content;
    }

    public function getPercent()
    {
        return $this->content->getSent() * 100 / $this->content->getLength();
    }
}
