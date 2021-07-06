<?php

/** @var Connection $connection */
$connection = require_once 'ip-connection.php';

$connection->removeNote($_POST['id']);

header('Location: inprogresspage.php');