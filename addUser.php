<?php
error_reporting(0);
include("connection.php");

if (isset($_POST["submit"])){
  $first_name = $_POST['first_name'];
  $surname = $_POST['surname'];
  $userName = $_POST['userName'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  $email = $_POST['email'];
  $phoneNumber = $_POST['phoneNumber'];
  $salary = $_POST['salary'];


  if(!empty($userName)&&!empty($password)){

    $query = "insert into users (first_name,surname,userName,password,role,email,phoneNumber,salary) values ('$first_name','$surname','$userName','$password','$role','$email','$phoneNumber','$salary')";
    
    mysqli_query($conn, $query);
    echo "<h1>User Information Registered</h1><br/><a href='adminMainPage.html'>Back to Menu</a><br/>" ; 
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
  <title>add User</title>
</head>

<body>
  <nav>
    <a href="adminMainPage.html">back</a>
  </nav>
  <div id="box">
    <form method="post" action="">
    <div style="font-size: 20px;margin: 10px;">add User</div>
    <input id="text" type="text" name="first_name" placeholder="FIRST NAME"></input></br></br>
      <input id="text" type="text" name="surname" placeholder="SURNAME"></input></br></br>
      <input id="text" type="text" name="userName" placeholder="USERNAME"></input></br></br>
      <input id="text" type="password" name="password" placeholder="PASSWORD"></input></br></br>
      <input id="text" type="text" name="role" placeholder="ROLE"></input></br></br>
      <input id="text" type="email" name="email" placeholder="EMAIL"></input></br></br>
      <input id="text" type="number" name="phoneNumber" placeholder="PHONE NUMBER"></input></br></br>
      <input id="text" type="text" name="salary" placeholder="Salary">
      <input class="button" type="submit" name="submit" value="Add User"></input>
      
  </form>
 
        </div>


</body>

</html>