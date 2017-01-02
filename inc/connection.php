<?php

try {
    $URL = getenv('JAWSDB_URL');
    $dbparts = parse_url($HOST);

    $HOST = $dbparts['host'];
    $USER = $dbparts['user'];
    $PASS = $dbparts['pass'];
    $DATABASE = ltrim($dbparts['path'], '/');
    $OPTIONS = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );

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