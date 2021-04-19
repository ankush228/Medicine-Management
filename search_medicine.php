<?php

session_start();
if(!$_SESSION['users']){

header("Location: signin.php");
}
?>
<?php
$database="medicalstore";
$searcht = $_POST['searcht'];
$con = mysqli_connect("localhost","root" ,"");

    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }

mysqli_select_db($con,"$database");
if(isset($_POST['search'])){

$query = "SELECT * FROM medicines where product_name LIKE '$searcht%'";

$result = mysqli_query($con,$query);
if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo   "Product ID : ".$row["product_id"]." "." Name : ". $row["product_name"] ." "." Company : ". $row["company_name"]." "." Category : ". $row["product_category"]." "." Quantity : ". $row["quantity"]." "." PriceperUnit : ". $row["ppu"]. "<br>";
    }
} else {
    echo "0 results";
}

}



mysqli_close($con);	
?>