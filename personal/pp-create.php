<?php

/** @var Connection $connection */
$connection = require_once 'pp-connection.php';

// Validate note object;

$id = $_POST['id'] ?? '';
if ($id){
    $connection->updateNote($id, $_POST);
} else {
    $connection->addNote($_POST);
}

header('Location: personalpage.php');