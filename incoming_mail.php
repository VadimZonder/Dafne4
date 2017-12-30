<?php
  $from = $_POST['from'];
  $to = $_POST['to'];
  $plain_text = $_POST['plain'];

  header("Content-type: text/plain");

  if ($to == '3901fcb7910a0616b875@cloudmailin.net'){
    header("HTTP/1.0 200 OK");
    echo('success');
  }else{
    header("HTTP/1.0 403 OK");
    echo('user not allowed here');
  }
  exit;
?>