<?php
class router
{
    function __autoload($class)
    {
        $dir=rtrim(__DIR__, "/bin");
        require_once ($dir."/".$class.".php");
    }

    function __construct()
    {
        define ("func_prefix", "c_");//префикс к классам

        $uri = $_SERVER['REQUEST_URI'];
        if (!isset($uri))
        {
            $uri = "index";//класс, вызываемый по умолчанию
        }
        echo $uri."</br>";

        $uri = rtrim($uri, '/');
        $uri = explode('/', $uri);//разбиваем массив на куски, которые можно передать в класс
        $uri = func_prefix.$uri;

        $controller = new $uri[0];
        if (isset($uri[2])) {
            $controller->$uri[1]($uri[2]);
        } else {
            if (isset($uri[1])) {
                $controller->$uri[1]();
            }
        }
    }
}