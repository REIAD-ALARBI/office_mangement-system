<?php
error_reporting(0);
include("connection.php");

$id = '';
if (isset($_GET["id"])) {
    $id = strtoupper(filter_input(INPUT_GET, 'id'));
} elseif (isset($_POST["id"])) {
    $id = strtoupper(filter_input(INPUT_POST, 'id'));
}
$query = 'select * from logof where ID=?';

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

    <form name="frm" method="post" action="updateEarning.php">
        <center>
            <label for="id" style="color:#fff; font-size:24px; ">ID:
                <input type="number" name="id" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="account" style="color:#fff; font-size:24px; ">Account:
                <input type="text" name="account" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="date" style="color:#fff; font-size:24px; ">Date:
                <input type="date" name="date" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="description" style="color:#fff; font-size:24px; ">Description:
                <input type="text" name="description" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="category" style="color:#fff; font-size:24px; ">Category:
                <input type="text" name="category" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="income" style="color:#fff; font-size:24px; ">Income money in:
                <input type="number" name="income" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="expense" style="color:#fff; font-size:24px; ">Expense money out:
                <input type="number" name="expense" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <label for="overall" style="color:#fff; font-size:24px; ">Overall Balance:
                <input type="number" name="overall" style="padding: 5px 35px; margin-left: 20px;">
            </label><br><br>
            <center><button type="submit" name="submit" style="padding: 10px 50px; background-color:lightblue; margin-left: 95px;">Save</button></center>
        </center>
    </form>
    <br /><a href="earninglog.php">Back to log</a>
</body>

</html>