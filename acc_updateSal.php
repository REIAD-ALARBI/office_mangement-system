<?php

$salary=strtoupper(filter_input(INPUT_POST,'salary'));
$first_name= filter_input(INPUT_GET,'first_name');


if (strlen(trim($first_name))<1) exit('Plate can not be blank'); // could be removed.

include('connection.php');
include('session.php');


$query='update users set salary=? where first_name=?';
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_error($stmt));
 
 @mysqli_stmt_bind_param($stmt,'is',$salary,$first_name) or exit('Bind Param Error.'); 
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt)); 
   
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
    <nav>
<a href="accountantView.php">back</a>
</nav>
<div id="box">
<form name="frm" method="post" action="">
<div style="font-size: 20px;margin: 10px;">Update <?php echo $first_name ?>'s Salary</div>
<input id = "text" type="number" name="salary" placeholder = "enter new salary"><br/>
   <input class = "button" type="reset"> <input class = "button" type="submit" value="Update">
   </form>
</div>
</body>
</html>