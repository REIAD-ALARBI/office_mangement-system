<?php
include_once ('connection.php');
$result = mysqli_query($conn,"SELECT * FROM transaction");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="design.css">

	<title>Transaction</title>
</head>

<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
</style>

<body>
  <div style="padding: 75px 50px ; margin: 20px 50px;">
<button type="submit" onclick="myFunction()" style="padding: 10px 40px; font-size:20px; background-color:steelblue; color: #fff;"><b>New Transaction</b></button>
  </div>

  <div>
    <center><h2 style="background-color: #fff; padding-top:15px; padding-bottom:15px;">The Starting Balance of the company is: $5,000,000</h2></center>
  </div>
  <?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <th>ID</th>
    <th>PURPOSE</th>
    <th>AMOUNT</th>
    <th>STATUS</th>
    <th>BALANCE</th>
    <th>DISCRIPTION</th>
    <th>DATE</th>
    <th>TIME</th>
    <th>TRANSACT BY</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Id"]; ?></td>
    <td><?php echo $row["purpose"]; ?></td>
    <td><?php echo $row["amount"]; ?></td>
    <td><?php echo $row["stat"]; ?></td>
    <td><?php echo $row["balance"]; ?></td>
    <td><?php echo $row["detail_info"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["time"]; ?></td>
    <td><?php echo $row["username"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}



?>
  <script>
function myFunction() {
  window.open("data_entry.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=350,width=700,height=600");
}
</script>	


</body>
</html>