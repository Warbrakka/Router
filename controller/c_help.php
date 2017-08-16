<?php
class c_help
{
    public function __construct()
    {
        echo "Controller: HELP";
    }
    public function other($arg = null)
    {
        echo " Method: OTHER, Parameters: ".$arg;
    }
}