<?php 

$url = $_GET['url'] ?? 'home';  
//var_dump($url);

if (explode("/", $url)[0] == "produtos") {
    $url = explode("/", $url)[1];
}

include "templates/{$url}.php";


        
