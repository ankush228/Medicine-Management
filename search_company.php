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
$query = "SELECT * FROM companies where company_name LIKE '$searcht%'";

$result = mysqli_query($con,$query);
if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo   "Company ID : ".$row["company_id"]." "." Name : ". $row["company_name"] ." "." Country : ". $row["country"]." "." E-mail : ". $row["email"]." "." Contact : ". $row["contact"]." "." Address : ". $row["address"]. "<br>";
    }
} else {
    echo "0 results";
	}
}
mysqli_close($con);	
?>