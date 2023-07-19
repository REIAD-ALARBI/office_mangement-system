<?php
error_reporting(0);
include("connection.php");

if (isset($_POST["submit"])) {
    $id = $_POST['id'];
    $account = $_POST['account'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $income = $_POST['income'];
    $expense = $_POST['expense'];
    $overall = $_POST['overall'];

    $query = "insert into logof (ID,ACCOUNT,DATE,DESCRIPTION,CATEGORY,INCOME_MONEY_IN,EXPENSE_MONEY_OUT,OVERALL) values ('$id','$account','$date','$description','$category','$income','$expense','$overall')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0)
        echo "<h1>Log information registered</h1><br/><a href='earninglog.php'>Back to log</a><br/>";
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

    <title>Add Expense</title>
</head>

<body>
    <center>
        <h1 style="color:#fff">Log of earnings and expenses:</h1>
    </center><br>
    <form action=" <?php echo htmlspecialchars($_SERVER[" PHP_SELF "]); ?>" method="post">
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
</body>

</html>