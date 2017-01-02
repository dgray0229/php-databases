<?php

try {
    $URL = getenv('JAWSDB_URL');
    var_dump($URL);
    $dbparts = parse_url($HOST);

    $HOST = $dbparts['host'];
    $USER = $dbparts['user'];
    $PASS = $dbparts['pass'];
    $DATABASE = ltrim($dbparts['path'], '/');

    $db = new PDO(
        "mysql:host=$HOST;
        dbname=$DATABASE",
        $USER, $PASS
    );
} catch (Exception $e) {
  echo "Unable to connect";
  //echo $e->getMessage();
  exit;
}