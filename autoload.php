<?php
function __autoload($className)
{
    var_dump($className);die;
    require_once str_replace('\\', '/', $className) . ".php";
}

