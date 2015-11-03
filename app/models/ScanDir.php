<?php

use Phalcon\Mvc\Model;

class ScanDir extends Model
{

    public function getDir()
    {

        $dir = '/home';
        $files = scandir($dir);
        return $files;

    }

}
