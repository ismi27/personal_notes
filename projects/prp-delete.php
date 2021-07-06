<?php

/** @var Connection $connection */
$connection = require_once 'prp-connection.php';

$connection->removeNote($_POST['id']);

header('Location: projectpage.php');