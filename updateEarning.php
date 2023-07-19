<?php
error_reporting(0);
include("connection.php");

$id = strtoupper(filter_input(INPUT_POST, 'id'));
$account = strtoupper(filter_input(INPUT_POST, 'account'));
$date = strtoupper(filter_input(INPUT_POST, 'date'));
$description = strtoupper(filter_input(INPUT_POST, 'description'));
$category = strtoupper(filter_input(INPUT_POST, 'category'));
$income = strtoupper(filter_input(INPUT_POST, 'income'));
$expense = strtoupper(filter_input(INPUT_POST, 'expense'));
$overall = strtoupper(filter_input(INPUT_POST, 'overall'));


$query = 'update logof set ACCOUNT=?,DATE=?,DESCRIPTION=?,CATEGORY=?,INCOME_MONEY_IN=?,EXPENSE_MONEY_OUT=?,OVERALL=? where ID=?';
$stmt = mysqli_stmt_init($conn);

mysqli_stmt_prepare($stmt, $query) or exit('Query Error.' . mysqli_stmt_error($stmt));

@mysqli_stmt_bind_param($stmt, 'ssssiiii', $account, $date, $description, $category, $income, $expense, $overall, $id) or exit('Bind Param Error.');

mysqli_stmt_execute($stmt) or exit('Query Execution failed.' . mysqli_stmt_errno($stmt));

mysqli_stmt_close($stmt);



?>
<br /><a href="earninglog.php">Back to log</a>