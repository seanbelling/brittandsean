<?php
  include_once "db_connection.php";

  $mysqli = dbConnect();
  $name = $_POST['name'];
  $artist = $_POST['artist'];
  $song = $_POST['song'];

  if (!empty($name) && !empty($artist) && !empty($song)) {
    $statement = $mysqli->prepare("INSERT INTO request_a_song (name, artist, song) VALUES (?, ?, ?)");
    $statement->bind_param('sss', $name, $artist, $song);
    if ($statement->execute() == false) {
      die($mysqli->error);

    }
    $statement->close();
  }
	$mysqli->close();
?>