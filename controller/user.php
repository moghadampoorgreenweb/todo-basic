<?php
include __DIR__ . "/../model/userModel.php";

function login($request){
    $title = 'Login';

    render('user.login', compact('title'));
}

function register($request){
    if (isset($request['register'])){
        $create = createUser($request);
        header('Location: ' . BASE_URL . '/user/login');
        exit();
    }
    $title = 'Register User';

    render('user.register', compact('title'));
}

function logout($request){

}