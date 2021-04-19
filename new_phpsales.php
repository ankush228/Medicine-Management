<?php
$database = "medicalstore";
$pname = $_POST['productname'];
$quantity = $_POST['quantity'];

$con = mysqli_connect("localhost","root" ,"");

    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }

mysqli_select_db($con,"$database");

if(isset($_POST['print'])){

 $query1="INSERT INTO newsales (id , product_name , product_quantity) VALUES (NULL , '$pname' , '$quantity')";
  mysqli_query($con,$query1) or die (mysqli_error($con));
  echo "<script type='text/javascript'>\n";
		echo "alert('Updated Successfully!');\n";
		echo"window.location.href = 'new_sales.php'";
		echo "</script>";

		mysqli_close($con);
 
 
}
?>