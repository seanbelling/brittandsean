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

    $to      = 'seanbelling@gmail.com,brittewilde@gmail.com';
    $subject = 'new guestbook entry (you are popular)';
    $message = '<html><body>check out <a href="http://www.brittandsean.com/guestbook">the guest book here</a></body></html>';
    $headers = 'From: sean@sean.com' . "\r\n" .
        'Reply-To: sean@sean.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion() . "\r\n" .
      "MIME-Version: 1.0" . "\r\n" .
      "Content-type:text/html;charset=iso-8859-1" . "\r\n";

    mail($to, $subject, $message, $headers);

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