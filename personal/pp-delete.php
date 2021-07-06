<?php

/** @var Connection $connection */
$connection = require_once 'pp-connection.php';

$connection->removeNote($_POST['id']);

header('Location: personalpage.php');