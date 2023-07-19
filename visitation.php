<?php
include('connection.php');
 
$query="update users set visitation = visitation + '1' where userName='$userName'";
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   
 mysqli_stmt_bind_result($stmt,$userName) or exit('Result storage failed.'. mysqli_stmt_errno($stmt));
   
mysqli_stmt_close($stmt);


 mysqli_close($conn);













?>