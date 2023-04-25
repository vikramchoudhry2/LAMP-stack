  <table border="1" cellpadding="5" cellspacing="2" width="600">
<tr>
    <th>Number</th>
    <th>Assignment</th>
    <th>Expected Hours</th>
</tr>
<?php
  include '../db.php';
  $sql = "select * from task";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    if ($id = $_GET) {
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<td><input type="text" class="form-control" name="taskname" value="'.$row['taskname'].'"></td>';
        echo '<td><input type="text" class="form-control" name="class" value="'.$row['class'].'"></td>';
        echo '<td><input type="number" class="form-control" name="exphours" value="'.$row['exphours'].'"></td>';
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
        echo '<input type="hidden" name="id" value="'.$row['id'].'">';
        echo '</form>';
    }else{
        echo "<td>" . $row['taskname'] . "</td>";
        echo "<td>" . $row['class'] . "</td>";
        echo "<td>" . $row['exphours'] . "</td>";
        echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
    }
    echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
    }
  $conn->close();
?>