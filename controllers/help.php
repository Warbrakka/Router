<?php
class help
{
    public function __construct()
    {
        echo "Controller: HELP";
    }
    public function other($arg = null)
    {
        echo "Controller: HELP, Method: OTHER, Parameters: ".$arg;
    }
}