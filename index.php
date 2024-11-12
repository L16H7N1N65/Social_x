<?php 

session_start();

require 'model/db_connect.php';
require 'view/index.php';

require 'model/users.php';

$info_first_user = getInfoUsersById(1, $mysqlClient);
print_r($info_first_user);
?>