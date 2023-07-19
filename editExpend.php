<?php
error_reporting(0);
include("connection.php");

$id = '';
if (isset($_GET["id"])) {
    $id = strtoupper(filter_input(INPUT_GET, 'id'));
} elseif (isset($_POST["id"])) {
    $id = strtoupper(filter_input(INPUT_POST, 'id'));
}
$query = 'select * from expenditures where ID=?';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">

    <title>Edit Expenditures</title>
</head>

<body>
    <center>
        <h1 style="color:#fff">Edit information:</h1>
    </center><br>
    <form name="frm" method="post" action="updateExpend.php">
        <center>
            <label for="id" style="color:#fff; font-size:24px; ">ID:
                <input type="number" name="id" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="date" style="color:#fff; font-size:24px; ">Date:
                <input type="date" name="date" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="description" style="color:#fff; font-size:24px; ">Description:
                <input type="text" name="description" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="expense" style="color:#fff; font-size:24px; ">Expense type:
                <input type="text" name="expense" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="amount" style="color:#fff; font-size:24px; ">Amount:
                <input type="number" name="amount" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <center><button type="submit" name="submit" style="padding: 10px 50px; background-color:lightblue; margin-left: 95px;">update</button></center>
        </center>
    </form>
    <br /><a href="expenditures.php">Back to expenditures</a>
</body>

</html>