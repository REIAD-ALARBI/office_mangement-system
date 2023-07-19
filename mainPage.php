
<?php
include('session.php');
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
<div class="banner-area">
        <h2>Welcome <?php echo $_SESSION['login_user'] ?></h2>
    </div>
    <nav>
        <a href="logout.php">LogOut</a>
        <a href="myProfile.php">MY PROFILE</a>
    </nav>
</body>

</html>