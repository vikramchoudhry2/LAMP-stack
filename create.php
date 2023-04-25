<?php
  include '../db.php';
  $task = $_POST["taskname"];
  $class = $_POST["class"];
  $exphours = $_POST["exphours"];
  $sql = "insert into task (taskname, class, exphours) values ('$task', '$class', '$exphours')";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>