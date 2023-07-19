<?php
include_once('connection.php');
$result = mysqli_query($conn, "SELECT * FROM logof");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">

    <title>Log of Earnings and Expenses</title>
</head>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
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
        <button type="submit" onclick="myFunction()" style="padding: 10px 40px; font-size:20px; background-color:steelblue; color: #fff;"><b>Add expense</b></button>
    </div>

    <div>
        <center>
            <h2 style="background-color: #fff; padding-top:15px; padding-bottom:15px;">Record of Company Expenditures:</h2>
        </center>
    </div>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table>

            <tr>
                <th>EDIT</th>
                <th>ID</th>
                <th>ACCOUNT</th>
                <th>DATE</th>
                <th>DESCRIPTION</th>
                <th>CATEGORY</th>
                <th>INCOME MONEY IN</th>
                <th>EXPENSES MONEY OUT</th>
                <th>OVERALL BALANCE</th>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><a href="editEarning.php?id='.$id.'">Edit</a></td>
                    <td><?php echo $row["ID"]; ?></td>
                    <td><?php echo $row["ACCOUNT"]; ?></td>
                    <td><?php echo $row["DATE"]; ?></td>
                    <td><?php echo $row["DESCRIPTION"]; ?></td>
                    <td><?php echo $row["CATEGORY"]; ?></td>
                    <td><?php echo $row["INCOME_MONEY_IN"]; ?></td>
                    <td><?php echo $row["EXPENSE_MONEY_OUT"]; ?></td>
                    <td><?php echo $row["OVERALL"]; ?></td>

                </tr>
            <?php
                $i++;
            }
            ?>
        </table>
    <?php
    } else {
        echo "No result found";
    }



    ?>
    <script>
        function myFunction() {
            window.open("addEarning.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=350,width=700,height=600");
        }
    </script>


</body>

</html>