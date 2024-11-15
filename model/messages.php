<?php

function getMessageById($id_message, $mysqlClient){
    $req_message = $mysqlClient->prepare('SELECT * FROM messages WHERE message_id = ?');
    $req_message->execute(array($id_message));
    return $req_message;
}

function getLastMessages($limit, $mysqlClient){
    // Assurez-vous que $limit est un entier et sécurisé
    $limit = (int)$limit;
    $req_lastMessages = $mysqlClient->prepare('SELECT * FROM messages WHERE parent_id = 0 ORDER BY sent_at DESC  LIMIT 0, :limit');
    $req_lastMessages->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req_lastMessages->execute();
    return $req_lastMessages;
}

function createNewMessage($ArrayInfoNewMessage, $mysqlClient){
    $insertNewMessage = $mysqlClient->prepare('INSERT INTO messages(user_id, parent_id, content) VALUES(?, ?, ?)');
    $insertNewMessage->execute(array($ArrayInfoNewMessage['user_id'], $ArrayInfoNewMessage['parent_id'], $ArrayInfoNewMessage['content']));
    return 'Message publié !';
}

