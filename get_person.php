<?php
  // $id = $_GET["persons_id"];

  $host = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "listautenti";

  $db=mysqli_connect($host,$username,$password,$dbname);
  $result = mysqli_query($db, "SELECT * from persons where persons_id = $id")
  $json_array = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;
  }
  print(json_encode($json_array));
  mysqli_close($db);
