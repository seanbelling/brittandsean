<?php
  header('Content-Type: application/json');

  include_once "db_connection.php";
  $mysqli = dbConnect();

  $myArray = array();
  if ($result = $mysqli->query('SELECT * FROM guestbook_entry where is_hidden = 0 order by id DESC')) {
    $tempArray = array();
    while($row = $result->fetch_object()) {
      $tempArray = $row;
      $date = $tempArray->created_at;
      $date = date('h:ia, F j Y', strtotime($date));
      $tempArray->date = $date;
      array_push($myArray, $tempArray);
    }
    echo json_encode($myArray);
  }
  $mysqli->close();
?>