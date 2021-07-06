<?php

/** @var Connection $connection */
$connection = require_once 'wp-connection.php';

$connection->removeNote($_POST['id']);

header('Location: workpage.php');