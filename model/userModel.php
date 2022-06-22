<?php

function createUser($request){
    global $dbConnection;

    $sql = "INSERT INTO `users` 
            (firstname, lastname, mobile, email, status, password)
            VALUES (:firstname, :lastname, :mobile, :email, :status, :password)";
    $statement = $dbConnection->prepare($sql);

    return $statement->execute([
        'firstname' => $request['firstname'],
        'lastname' => $request['lastname'],
        'mobile' => $request['mobile'],
        'email' => $request['email'],
        'status' => 'active',
        'password' => md5($request['password']),
    ]);
}
