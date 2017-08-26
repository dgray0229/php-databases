<?php

try {
//  $db = new PDO("sqlite:".__DIR__."/database.db");
    $server = getenv('JAWSDB_URL');
    $user = getenv('USERNAME');
    $pass = getenv('PASSWORD');
    $db = new PDO($server, $user, $pass);
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Unable to connect";
  //echo $e->getMessage();
  exit;
}