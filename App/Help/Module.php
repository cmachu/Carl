<?php

namespace App\Help;

use Core\Service;

class Module extends Service
{
    protected $availableCalls = ['help', 'test'];

    public function getInitial(){
        return "\n\n--- This is initial method --- \n\n";
    }

    public function getTest(){
        return "\n\n--- This is test method --- \n\n";
    }

    public function getHelp(){
        $text = "---- Carl - PHP Console framework ----\n";
        $text.= "Available commands:\n\n";
        $text.= "test - test";
        $text.= "\n\n";
        return $text;
    }

    public function getError(){
        echo "Unexpected error!\n";
        return $this->getHelp();
    }

}