



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="styles/index.css" rel="stylesheet">
</head>
<body>
    <h1 class="header">XYZ Bank </h1>

        <div class="links">    
            <a href="new.php" class="link mx-5">Add new user</a>
            <a href="transactions.php" class="link">View all transactions</a>
        </div>

    <div class="container">
   
        <div class="customers">

            <h3>CUSTOMERS</h3>
            <div class="row customer-heading"><h5>NAME</h5><h5>AMOUNT</h5><h5>SEND</h5></div>
            <?php 
            require_once("connection.php");
            $x = "SELECT * FROM customers";
            $result = mysqli_query($con,$x);
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='row customer'><h5>";
        
                echo($row['name']);
                echo "</h5><h6>";
                echo($row['amount']);
                echo "</h6><button>pay</button></div>";
            }   
            ?>
        </div>

    </div>


<script>
$(".customer").on("click","button",function(event){
    $element = $(this).parent();
    $sender = $element[0].childNodes[0].innerText;
    $recepient = prompt("Please enter name of recepient", "");
    if($recepient!=null){
    $amount = prompt("Please enter the amount", "");
    }
    if($recepient!=null && $amount!=null){
        window.location.href= "main.php?var1=" + encodeURIComponent($recepient) + "&var2=" + encodeURIComponent($sender) + "&var3=" + encodeURIComponent($amount) + "&var4=" + encodeURIComponent($sender + " paid Rs." + $amount + " to " + $recepient);
    }
});
</script>


</body>
</html>