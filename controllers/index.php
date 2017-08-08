<?php
class index
{
    public function __construct()
    {
        echo "Controller: INDEX";
    }
    public function action($arg = null)
    {
        echo "Controller: INDEX, Method: ACTION, Parameters: ".$arg;
    }
}