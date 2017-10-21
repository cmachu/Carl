<?php

namespace Core;

class Carl
{

    private $response;

    public function __construct($argv, $argc)
    {
        if ($argc > 1) {
            register_shutdown_function( array($this,"fatalError") );

            $className = "\\App\\" . ucfirst($argv[1]) . "\\Module";
            $module = new $className();

            if(!isset($argv[2])) $argv[2] = '';

            $response = $module->dispatch($argv[2]);

            $this->setResponse($response);
        } else {
            $className = "\\App\\Help\\Module";
            $class = new $className();
            $this->setResponse($class->getHelp());
        }

    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse($response)
    {
        $this->response = $response;
    }

    public function fatalError(){
        $className = "\\Core\\Help\\Module";
        $class = new $className();
        echo $class->getError();
    }

}
