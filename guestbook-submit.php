<?php
  include_once "db_connection.php";

  $mysqli = dbConnect();
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if (!empty($name) && !empty($email) && !empty($message)) {
    $statement = $mysqli->prepare("INSERT INTO guestbook_entry (name, email, message) VALUES (?, ?, ?)");
    $statement->bind_param('sss', $name, $email, $message);
    if ($statement->execute() == false) {
      die($mysqli->error);
    }
    $statement->close();

    $lastId = $mysqli->insert_id;
    $myArray = array();
    if ($result = $mysqli->query('SELECT * FROM guestbook_entry where id = ' . $lastId)) {
      $tempArray = array();
      while($row = $result->fetch_object()) {
        $tempArray = $row;
        $date = $tempArray->created_at;
        $date = date('h:ia, F j Y', strtotime($date));
        $tempArray->date = $date;
        echo json_encode($tempArray);
      }

    }
  }
	$mysqli->close();

?>