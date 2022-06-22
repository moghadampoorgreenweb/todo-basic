<?php

function render($template, $vars = false){

    $template = str_replace('.', '/', $template);
    if ($vars){
        extract($vars);
    }
    include __DIR__ . "/../views/{$template}.php";
}

function asset($asset){
    $asset = trim($asset, '/');
    echo BASE_URL . "/views/assets/{$asset}";
}