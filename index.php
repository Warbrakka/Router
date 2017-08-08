<head>
    <title>Router</title>
</head>
<body>
<?php
$url = $_SERVER['REQUEST_URI'];
echo $url;
if (!isset($url)) {$url = 'index';}
$url = rtrim($url, '/');
$url = explode('/', $url);
print_r($url);
require 'controllers/'.$url[0].'.php';
$controller = new $url[0];
if(isset($url[2])) {
    $controller->$url[1]($url[2]);
    echo "1";
}
else {
    if(isset($url[1]))
    {
        $controller->$url[1]();
        echo "2";
    }
}
?>
</body>
