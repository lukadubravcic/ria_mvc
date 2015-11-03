<?php

use Phalcon\Mvc\Model;

class ScanDir extends DOMNodeList
{

    public function getDir()
    {

        $dir = '/home';
        $files = scandir($dir);
        return $files;

    }

}
