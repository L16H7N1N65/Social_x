<?php 

session_start();

require 'model/db_connect.php';

require 'model/users.php';
require 'model/messages.php';


$infoUser = getInfoUsersById(1, $mysqlClient); //id_user = 1
$reqLastMessages = getLastMessages(10, $mysqlClient);

if(isset($_POST['submit_message'])){
    if(!empty($_POST['message_content'])){
        $ArrayInfoNewMessage = [];
        $ArrayInfoNewMessage['user_id'] = 1;
        $ArrayInfoNewMessage['parent_id'] = 0;
        $ArrayInfoNewMessage['content'] = $_POST['message_content'];
        $final_message_action = createNewMessage($ArrayInfoNewMessage, $mysqlClient);
        header('Refresh: 2, url="index.php"');
    }else{
        $final_message_action = "Erreur, veuillez remplir le champ de texte !";
    }
}

require 'view/index.php';
?>