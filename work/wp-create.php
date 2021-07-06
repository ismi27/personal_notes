<?php

/** @var Connection $connection */
$connection = require_once 'wp-connection.php';

// Validate note object;

$id = $_POST['id'] ?? '';
if ($id){
    $connection->updateNote($id, $_POST);
} else {
    $connection->addNote($_POST);
}

header('Location: workpage.php');