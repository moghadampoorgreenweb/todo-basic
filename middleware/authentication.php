<?php

function isLogin(){
    if (!isset($_SESSION['id'])){
        header('Location: ' . BASE_URL . '/user/login');
        exit();
    }
}