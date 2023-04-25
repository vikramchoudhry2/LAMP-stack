<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1>PHP + MySQL CRUD Demo</h1>
  <p>Create, read, update, and delete records below</p>
  <p>This is a very very basic To-Do list! Input your task name, the class it is for, and the number of hours it's expected to take</p>
  <p></p>
  <table class="table">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
  </table>

  <form class="form-inline m-2" action="create.php" method="POST">
    <label for="name">Assignment Name:</label>
    <input type="text" class="form-control m-2" id="taskname" name="taskname">
    <label for="class">Class:</label>
    <input type="text" class="form-control m-2" id="class" name="class">
    <label for="number">Hours:</label>
    <input type="number" class="form-control m-2" id="exphours" name="exphours">
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
</body>
</html>