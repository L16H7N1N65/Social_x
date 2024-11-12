<?php

function getInfoUsersById($id_user, $mysqlClient){
    $getInfosUsers = $mysqlClient->prepare('SELECT * FROM users WHERE user_id = ?');
    $getInfosUsers->execute(array($id_user));
    $info_user = $getInfosUsers->fetch();
    return $info_user;
}

