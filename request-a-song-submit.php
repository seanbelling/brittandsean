<?php
  include_once "db_connection.php";

  $mysqli = dbConnect();
  $name = $_POST['name'];
  $song = $_POST['song'];

  if (!empty($name) && !empty($song)) {
    $statement = $mysqli->prepare("INSERT INTO request_a_song (name, song) VALUES (?, ?)");
    $statement->bind_param('ss', $name, $song);
    if ($statement->execute() == false) {
      die($mysqli->error);

    }
    $statement->close();
  }
	$mysqli->close();
?>