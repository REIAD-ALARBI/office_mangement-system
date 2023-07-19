<?php
error_reporting(0);
include("connection.php");

if (isset($_POST["submit"])){
  $departmentName = $_POST['departmentName'];
  if(!empty($departmentName)){
    $query = "insert into departments (departmentName) values ('$departmentName')";
    mysqli_query($conn, $query);
    //header("LOCATION: login.php");
    if (mysqli_affected_rows($conn)>0)
     echo "<h1>Department information registered</h1><br/><a href='adminMainPage.html'>Back to Menu</a><br/>" ; 
    else 
     echo "Something else happened<br/>";   

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
  <title>add Department</title>
</head>

<body>
  <nav>
    <a href="adminMainPage.html">back</a>
  </nav>
  <div id="box">
    <form method="post" action="">
    <div style="font-size: 20px;margin: 10px;">add Department</div>
      <input id="text" type="text" name="departmentName" placeholder="DEPARTMENT NAME"></input></br></br>
      <input class="button" type="submit" name="submit" value="Add"></input>
  
  </form>
  </div>


</body>

</html>