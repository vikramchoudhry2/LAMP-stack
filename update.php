<?php
  include '../db.php';
  $id = $_POST['id'];
  $taskname = $_POST['taskname'];
  $class = $_POST['class'];
  $exphours = $_POST['exphours'];
  $sql = "update task set taskname='$taskname', class='$class', exphours='$exphours' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>
