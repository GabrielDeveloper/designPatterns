<?php

namespace App\Solid\OpenClose;

class File implements Download
{
    private $length;
    private $sent;
    
    public function setLength($length) {
        $this->length = $length;
    }
 
    public function getLength() {
        return $this->length;
    }
 
    public function setSent($sent) {
        $this->sent = $sent;
    }
 
    public function getSent() {
        return $this->sent;
    }
}
