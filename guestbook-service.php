<?php
  header('Content-Type: application/json');
  $dude = array('id'=> 1, 'created_at'=> 'some_time', 'name'=> 'sean', 'message'=> 'hey testing');
  $dude2 = array('id'=> 2, 'created_at'=> 'some_time', 'name'=> 'britt', 'message'=> 'heyyy testing again');
  $thing = array($dude, $dude2);
  echo json_encode($thing);
?>