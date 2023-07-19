<?php      
    error_reporting(0);
    session_start();
    include('connection.php');  


    if (isset($_POST["submit"])){
    $userName = $_POST['userName'];  
    $password = $_POST['password'];  

        $sql = "select userName,password from users where userName = '$userName' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($userName == 'admin' && $count ==1){  
           // session_register("userName");

            $_SESSION['login_user'] = $userName;
            header("location: adminMainPage.html"); 
            include('visitation.php');  
        }
        else if($userName == 'accountant' && $count ==1){  
            // session_register("userName");
             $_SESSION['login_user'] = $userName;
             header("location: accountantView.php");
             include('visitation.php');    
         }
         else if($userName == 'manager' && $count ==1){  
            // session_register("userName");
             $_SESSION['login_user'] = $userName;
             header("location: manager.html");
             include('visitation.php');    
         }
         else if($userName == 'secretary' && $count ==1){  
            // session_register("userName");
             $_SESSION['login_user'] = $userName;
             header("location: secretary.html");
             include('visitation.php');    
         }
         else if($userName == "marketer" && $count ==1){  
            $_SESSION['login_user'] = $userName;
            header("location: marketerView.php"); 
            include('visitation.php');  

         }else if($count == 1 && $count ==1){  
            $_SESSION['login_user'] = $userName;
            header("location: mainPage.php"); 
            include('visitation.php');  
        }
        else{
            echo("please enter valid information");  

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
    <title>index</title>
</head>

<body>
    <div id="box">
        <form method="post" action="">
            <div style="font-size: 20px;margin: 10px;">Login</div>
            <input id="text" type="text" name="userName" placeholder="USER NAME"></input></br></br>
            <input id="text" type="password" name="password" placeholder="PASSWORD"></input></br></br>
            <input class="button" type="submit" name="submit" value="login"></input> </br></br>
        </form>
        </p>
    </div>
</body>

</html>