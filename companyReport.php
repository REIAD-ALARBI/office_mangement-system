<?php
include('connection.php');

$query='select first_name,surname,salary,visitation from users';
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   
 mysqli_stmt_bind_result($stmt,$first_name,$surname,$salary,$visitation) or exit('Result storage failed.'. mysqli_stmt_errno($stmt));
 
echo '<center><h1>EMPLOYEES</h1><table border="1"><tr><th>Name</th><th>Surname</th><th>Salary</th><th>Visitations</th></tr>';

while(mysqli_stmt_fetch($stmt)){
		echo '<tr>';
		echo "<td>$first_name</td>";
		echo "<td>$surname</td>";
		echo "<td>$salary</td>";
		echo "<td>$visitation</td>";
		
		echo '</tr>';
 }
echo '</table><br/>';

mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);


 $query='select ACCOUNT,CATEGORY,INCOME_MONEY_IN,EXPENSE_MONEY_OUT,OVERALL from logof';
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   
 mysqli_stmt_bind_result($stmt,$ACCOUNT,$CATEGORY,$INCOME_MONEY_IN,$EXPENSE_MONEY_OUT,$OVERALL) or exit('Result storage failed.'. mysqli_stmt_errno($stmt));

echo '<h1>LOG OF EARNINGS</H1><table border="1"><tr><th>ACCOUNT</th><th>CATEGORY</th><th>INCOME_MONEY_IN</th><th>EXPENSE_MONEY_OUT</th><th>OVERALL</th></tr>';

while(mysqli_stmt_fetch($stmt)){
		echo '<tr>';
		echo "<td>$ACCOUNT</td>";
		echo "<td>$CATEGORY</td>";
		echo "<td>$INCOME_MONEY_IN</td>";
		echo "<td>$EXPENSE_MONEY_OUT</td>";
		echo "<td>$OVERALL</td>";

		
		echo '</tr>';
 }
echo '</table><br/>';

mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);


$query='select DATE,DESCRIPTION,EXPENSE_TYPE,AMOUNT from expenditures';
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   
 mysqli_stmt_bind_result($stmt,$DATE,$DESCRIPTION,$EXPENSE_TYPE,$AMOUNT) or exit('Result storage failed.'. mysqli_stmt_errno($stmt));

echo '<h1>EXPENDITURES</h1><table border="1"><tr><th>DATE</th><th>DESCRIPTION</th><th>EXPENSE_TYPE</th><th>AMOUNT</th></tr>';

while(mysqli_stmt_fetch($stmt)){
		echo '<tr>';
		echo "<td>$DATE</td>";
		echo "<td>$DESCRIPTION</td>";
		echo "<td>$EXPENSE_TYPE</td>";
		echo "<td>$AMOUNT</td>";
		
		echo '</tr>';
 }
echo '</table><br/>';

mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);

$query='select purpose,amount,stat,balance,detail_info,date from transaction';
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   
 mysqli_stmt_bind_result($stmt,$purpose,$amount,$stat,$balance,$detail_info,$date) or exit('Result storage failed.'. mysqli_stmt_errno($stmt));

echo '<h1>TRANSACTIONS</h1><table border="1"><tr><th>purpose</th><th>amount</th><th>stat</th><th>balance</th><th>detail_info</th><th>date</th></tr>';

while(mysqli_stmt_fetch($stmt)){
		echo '<tr>';
		echo "<td>$purpose</td>";
		echo "<td>$amount</td>";
		echo "<td>$stat</td>";
		echo "<td>$balance</td>";
		echo "<td>$detail_info</td>";
		echo "<td>$date</td>";

		
		echo '</tr>';
 }
echo '</table><br/>';
echo'<div style="padding: 75px 50px ; margin: 20px 50px;">
 <button type="submit" onclick="printFunction()" style="padding: 10px 40px; font-size:20px; background-color:steelblue; color: #fff;"><b>Print Report AS PDF</b></button>
   </div>';
mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);
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
<script>
      function printFunction() { 
        window.print(); 
      }
    </script>
</body>
</html>