<?php
//error_reporting(0);
include("connection.php");

$task_id= filter_input(INPUT_GET,'task_id');

$query = 'delete from tasks where task_id=?';
$stmt = mysqli_stmt_init($conn);

mysqli_stmt_prepare($stmt, $query) or exit('Query Error.' . mysqli_stmt_error($stmt));

@mysqli_stmt_bind_param($stmt, 'i', $task_id) or exit('Bind Param Error.');

mysqli_stmt_execute($stmt) or exit('Query Execution failed.' . mysqli_stmt_errno($stmt));

if (mysqli_stmt_affected_rows($stmt)>0) echo "TASK HAS BEEN SUCCESSFULLY COMPLETED.";


mysqli_stmt_close($stmt);



?>
<br /><a href="tasks.php">Back to Tasks</a>