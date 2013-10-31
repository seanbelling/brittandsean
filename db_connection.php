<?php

  function dbConnect() {
  	$credentials = parse_ini_file("db.ini");
    $mysqli = new mysqli($credentials['host'], $credentials['user'], $credentials['password'], $credentials['database']);
    if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    return $mysqli;
  }

?>