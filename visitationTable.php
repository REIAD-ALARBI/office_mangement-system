<?php
include('connection.php');


$query='select first_name,surname,email,phoneNumber,visitation from users';
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   
 mysqli_stmt_bind_result($stmt,$first_name,$surname,$email,$phoneNumber,$visitation) or exit('Result storage failed.'. mysqli_stmt_errno($stmt));
 echo'<center><h1> EMPLOYEES NUMBER OF VISITATIONS </h1> </br> </br>';
echo '<table border="1"><tr><th>Name</th><th>Surname</th><th>Email</th><th>Phone Number</th><th>number of visits</th></tr>';

while(mysqli_stmt_fetch($stmt)){
		echo '<tr>';
		echo "<td>$first_name</td>";
		echo "<td>$surname</td>";
		echo "<td>$email</td>";
        echo "<td>$phoneNumber</td>";
        echo "<td>$visitation</td>";
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