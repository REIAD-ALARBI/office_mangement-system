<?php

include('connection.php');
include('session.php');
$username = $_SESSION['login_user'];  

$query="select first_name,surname,role,salary,email,phoneNumber from users where userName = '$username' ";
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   
 mysqli_stmt_bind_result($stmt,$first_name,$surname,$role,$salary,$email,$phoneNumber) or exit('Result storage failed.'. mysqli_stmt_errno($stmt));
 echo'<h1> EMPLOYEES PROFILE INFORMATIONS </h1> </br> </br>';
 echo '<table border="1"><tr><th>Name</th><th>Surname</th><th>Role</th><th>Salary</th><th>Phone Number</th><th>Email</th></tr>';

while(mysqli_stmt_fetch($stmt)){
		echo '<tr>';
		echo "<td>$first_name</td>";
		echo "<td>$surname</td>";
		echo "<td>$role</td>";
		echo "<td>$salary</td>";
		echo "<td>$phoneNumber</td>";
		echo "<td>$email</td>";

		
		echo '</tr>';
 }
echo '</table><br/>';

mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);


 mysqli_close($conn);

?>
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