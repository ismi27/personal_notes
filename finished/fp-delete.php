<?php

/** @var Connection $connection */
$connection = require_once 'fp-connection.php';

$connection->removeNote($_POST['id']);

header('Location: finishedpage.php');