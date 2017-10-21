<?php

namespace App\Sample;

use Core\Service;

class Module extends Service
{
    protected $availableCalls = ['test'];

    public function getInitial(){
        return "\n\n--- This is sample initial method --- \n\n";
    }

    public function getTest(){
        return "\n\n--- This is sample test method --- \n\n";
    }

}