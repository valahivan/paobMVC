<?php 

function view($uri, $data = []){
   extract($data);
   return include_once "$uri";
}

function redirect($uri){
    return header("Location: $uri");
}
