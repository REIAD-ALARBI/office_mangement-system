<?php
error_reporting(0);
include("connection.php");

if (isset($_POST["submit"])){
  $employee = $_POST['employee'];
  $task = $_POST['task'];
  $description = $_POST['description'];
  $dueDate = $_POST['dueDate'];
  $priority = $_POST['priority'];


  if(!empty($employee)){

    $query = "insert into tasks (employee,task,description,dueDate,priority) values ('$employee','$task','$description','$dueDate','$priority')";
    
    mysqli_query($conn, $query);
    echo "<h1>Task Information Registered</h1><br/><a href='tasks.php'>Back to Menu</a><br/>" ; 
    die;
  }else
  {
    echo"enter your information";
  }  
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="design.css">
  <title>add New Task</title>
</head>

<body>
  <nav>
    <a href="adminMainPage.html">back</a>
  </nav>
  <div id="box">
    <form method="post" action="">
    <div style="font-size: 20px;margin: 10px;">add User</div>
      <input id="text" type="text" name="employee" placeholder="EMPLOYEE"></input></br></br>
      <input id="text" type="text" name="task" placeholder="TASK"></input></br></br>
      <input id="text" type="text" name="description" placeholder="DESCRIPTION"></input></br></br>
      <input id="text" type="date" name="dueDate" placeholder="DUE DATE"></input></br></br>
      <input id="text" type="text" name="priority" placeholder="PRIORITY"></input></br></br>
      <input class="button" type="submit" name="submit" value="Add Task"></input>
      
  </form>
 
        </div>


</body>

</html>