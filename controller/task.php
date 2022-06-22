<?php
include __DIR__ . '/../middleware/authentication.php';
isLogin();

function index($request){

    echo 'List Of Tasks';
}