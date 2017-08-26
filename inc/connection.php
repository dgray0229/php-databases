<?php

try {
//  $db = new PDO("sqlite:".__DIR__."/database.db");
    $host = getenv('HOST');
    $user = getenv('USERNAME');
    $pass = getenv('PASSWORD');
    $jawsdb = getenv('DB');
    $url = 'mysql:host='.$host.'; dbname='.$jawsdb;

    $db = new PDO($url, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Unable to connect.<br />";
  echo $e->getMessage();
  exit;
}