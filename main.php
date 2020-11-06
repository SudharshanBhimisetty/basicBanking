<?php


if(isset($_POST["name"]) && isset($_POST["amount"])){

  require_once("connection.php");

$name = $_POST["name"];
$amount = $_POST["amount"];

$d = "INSERT INTO customers(name,amount) VALUES ('$name','$amount')";

         
if(mysqli_query($con,$d) ){
  header("location:index.php");
}


}else{
  header("location:new.php");
}



if(isset($_GET["var1"]) && isset($_GET["var2"]) && isset($_GET["var3"]) ){


    $var1 = urldecode($_GET["var1"]);
    $var2 = urldecode($_GET["var2"]);
    $var3 = (int)urldecode($_GET["var3"]);
    $var4 = urldecode($_GET["var4"]);

    require_once("connection.php");
          $a = "UPDATE customers SET amount = amount + $var3 where name = '$var1'";
          $b = "UPDATE customers SET amount = amount - $var3 where name = '$var2'";
          $c = "INSERT INTO transactions(text) value ('$var4')";
    
          
        if(mysqli_query($con,$a) && mysqli_query($con,$b) && mysqli_query($con,$c) ){
             header("location:index.php");
        }
            
}
?>

