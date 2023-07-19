<?php
error_reporting(0);
include("connection.php");

$id = strtoupper(filter_input(INPUT_POST, 'id'));
$date = strtoupper(filter_input(INPUT_POST, 'date'));
$description = strtoupper(filter_input(INPUT_POST, 'description'));
$expense = strtoupper(filter_input(INPUT_POST, 'expense'));
$amount = strtoupper(filter_input(INPUT_POST, 'amount'));

$query = 'update expenditures set DATE=?,DESCRIPTION=?,EXPENSE_TYPE=?,AMOUNT=? where ID=?';
$stmt = mysqli_stmt_init($conn);

mysqli_stmt_prepare($stmt, $query) or exit('Query Error.' . mysqli_stmt_error($stmt));

@mysqli_stmt_bind_param($stmt, 'sssii', $date, $description, $expense, $amount, $id) or exit('Bind Param Error.');

mysqli_stmt_execute($stmt) or exit('Query Execution failed.' . mysqli_stmt_errno($stmt));

mysqli_stmt_close($stmt);



?>
<br /><a href="expenditures.php">Back to Expenditures</a>