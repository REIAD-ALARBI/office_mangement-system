<?php
include('connection.php');

$query='select task_id,employee,task,description,dueDate,priority from tasks';
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   
 mysqli_stmt_bind_result($stmt,$task_id,$employee,$task,$description,$dueDate,$priority) or exit('Result storage failed.'. mysqli_stmt_errno($stmt));
echo'<nav>
<a href="adminMainPage.html">back</a>
</nav><center><h1> EMPLOYEES TASKS </h1> </br> </br>';
echo '<table border="1"><tr><th>Task ID</th><th>Employee Name</th><th>Task Name</th><th>Description</th><th>Due Date</th><th>Priority</th></tr>';

while(mysqli_stmt_fetch($stmt)){
		echo '<tr>';
		echo "<td>$task_id</td>";
		echo "<td>$employee</td>";
		echo "<td>$task</td>";
        echo "<td>$description</td>";
        echo "<td>$dueDate</td>";
		echo "<td>$priority</td>";
		echo '<td><a href="deleteTask.php?task_id='.$task_id.'">Mark as Completed</a></td>';
		
		echo '</tr>';
 }
echo '</table><br/>';

mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);


 mysqli_close($conn);
?>
      <a href="addTask.php " style="color:white;">ADD NEW TASK</a>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="design.css">

	<title>Document</title>
</head>

<body>
	
</body>
</html>