<?php
error_reporting(0);
include("connection.php");
$result = mysqli_query($conn, "SELECT balance FROM transaction ORDER BY Id DESC LIMIT 1");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">

    <title>Data Entry</title>
</head>

<body>
    <br>
    <center>
        <h1 style="color:#fff">Transaction</h1>
    </center><br>
    <div>

        <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
            <table>

                <center>
                    <form action=" <?php echo htmlspecialchars($_SERVER[" PHP_SELF "]); ?>" method="post">
                        <label for="type" style="color:#fff; font-size:18px; margin-left: 0px;
        ">Transaction for:
                            <select name="purpose" class="form-control" id="dropdown" style="padding: 5px 80px; margin-right: 40px;">
                                <option value="salary">Salary</option>
                                <option value="tax">Tax</option>
                                <option value="loan">Loan</option>
                                <option value="bills">Bills</option>
                                <option value="sale">Sale</option>
                                <option value="insurance">Insurance</option>
                                <option value="purchase">Purchase</option>
                                <option value="others">Others</option>
                            </select>
                        </label><br><br>
                        <label for="income" style="color:#fff; font-size:18px; ">Amount:
                            <input type="number" name="amount" style="padding: 5px 35px; margin-left: 20px;">
                        </label><br><br>
                        <label for="expense" style="color:#fff; font-size:18px;">Income:
                            <input type="radio" name="status" value="Income" style="padding: 5px 35px; margin-right: 10px;">
                        </label>
                        <label for="expense" style="color:#fff; font-size:18px;">Expenditure:
                            <input type="radio" name="status" value="Expense" style="padding: 5px 35px; margin-right: 10px;">
                        </label><br><br>

                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            
                                    <input type="hidden" name="balance" value="<?php echo $row["balance"]; ?>" style="padding: 5px 35px; margin-right: 10px;">
                            
                                <label for="description" style="color:#fff; font-size:18px;  ">Description:
                                    <textarea name="description" id="" cols="30" rows="10" style="vertical-align: top;"></textarea>
                                </label><br><br>
                                <center><button type="submit" name="submit" style="padding: 10px 50px; background-color:lightblue; margin-left: 95px;">Save</button></center>
                    </form>
                </center>
    </div>
<?php
                            $i++;
                        }
                    }
?>

<?php

if (isset($_POST["submit"])) {

    $purpose = mysqli_real_escape_string($conn, $_POST['purpose']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $balance = mysqli_real_escape_string($conn, $_POST['balance']);

if($status == 'Income'){
    $bal = $amount + $balance;
}
else{
    $bal = $balance - $amount;
}
    $sql = "INSERT INTO transaction (purpose, detail_info, amount, balance, stat) VALUES
	('$purpose', '$description', '$amount', '$bal', '$status')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Data Successfully saved")</script>';
    } else {
        echo "ERROR: Sorry check your connection! $sql. "
            . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

</body>

</html>