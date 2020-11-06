

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="transactions.css" rel="stylesheet">
</head>
<body>
    <div class="transactions">
            <h3>TRANSACTIONS</h3>
            <a href="index.php" class="link">Go Back</a>


            <?php 
            require_once("connection.php");
            $y = "SELECT * FROM transactions";
            $result1 = mysqli_query($con,$y);
            while($row1 = mysqli_fetch_assoc($result1)){
                echo "<div class='transaction'><li>";
                echo($row1['text']);

                echo "</li></div>";
            }   
            ?>

    </div>
</body>
</html>