<?php

namespace App\Test\Solid;

use \PHPUnit_Framework_TestCase;
use App\Solid\OpenClose\Progress;
use App\Solid\OpenClose\File;

class OpenCloseTest extends PHPUnit_Framework_TestCase
{

    public function testItCanGetTheProgressOfAFileAsPercent()
    {
        $file = new File();
        $file->setLength(200);
        $file->setSent(100);

        $progress = new Progress($file);
        $this->assertEquals(50, $progress->getPercent());
    }

}
