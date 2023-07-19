<?php
error_reporting(0);
include("connection.php");

if (isset($_POST["submit"])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $expense = $_POST['expense'];
    $amount = $_POST['amount'];

    $query = "insert into expenditures (ID,DATE,DESCRIPTION,EXPENSE_TYPE,AMOUNT) values ('$id','$date','$description','$expense','$amount')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0)
        echo "<h1>Expenditure information registered</h1><br/><a href='expenditures.php'>Back to expenditure</a><br/>";
    else
        echo "Something else happened<br/>";

    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">

    <title>Add Expenditures</title>
</head>

<body>
    <center>
        <h1 style="color:#fff">Expenditures:</h1>
    </center><br>
    <form action=" <?php echo htmlspecialchars($_SERVER[" PHP_SELF "]); ?>" method="post">
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
            <center><button type="submit" name="submit" style="padding: 10px 50px; background-color:lightblue; margin-left: 95px;">Save</button></center>
        </center>
    </form>
</body>

</html>