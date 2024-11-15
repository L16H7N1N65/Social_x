<?php 

session_start();

require 'model/db_connect.php';


require 'model/users.php';

$info_first_user = getInfoUsersById(1, $mysqlClient);

require 'view/index.php';

?>