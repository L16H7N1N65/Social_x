<?php

function getInfoUsersById($id_user, $mysqlClient){
    $getInfosUsers = $mysqlClient->prepare('SELECT * FROM users WHERE user_id = ?');
    $getInfosUsers->execute(array($id_user));
    $info_user = $getInfosUsers->fetch();
    return $info_user;
}


$user_email = isset($_POST['user_email']) ? $_POST['user_email'] : null;
$user_password = isset($POST['user_password']) ? $POST['user_password'] : null;


function setInfoUsers(){
    $stmt -> prepare(
        "INSERT INTO Users (email,password)
        VALUES (:email,:password)")
    $stmt->bindParam(':email', $user_email);
    $stmt->bindParam(':password', $user_password);
    $stmt -> execute();
}
