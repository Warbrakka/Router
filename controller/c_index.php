<?php
class c_index
{
    public function __construct()
    {
        echo "Controller: INDEX";
    }
    public function action($arg = null)
    {
        echo " Method: ACTION, Parameters: ".$arg;
    }
}