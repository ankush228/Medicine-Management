<?php
$database="medicalstore";
$pname = $_POST['productname'];
$nquantity = $_POST['newquantity'];
$nprice = $_POST['newprice'];

$con = mysqli_connect("localhost","root" ,"");

    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }

mysqli_select_db($con,"$database");
if(isset($_POST['upquan'])){

$query1 = "UPDATE medicines SET quantity='$nquantity' WHERE product_name = '$pname'";
$result1 = mysqli_query($con,$query1);

echo "<script type='text/javascript'>\n";
echo "alert('Quantity Updated!!!');\n";
echo"window.location.href = 'update_medicines.php'";
echo "</script>";

}
if(isset($_POST['uppri'])){

$query2 = "UPDATE medicines SET ppu='$nprice' WHERE product_name = '$pname'";
$result2 = mysqli_query($con,$query2);

echo "<script type='text/javascript'>\n";
echo "alert('Price Updated!!!');\n";
echo"window.location.href = 'update_medicines.php'";
echo "</script>";

}

if(isset($_POST['both'])){

$query3 = "UPDATE medicines SET quantity='$nquantity' WHERE product_name = '$pname'";
$result3 = mysqli_query($con,$query3);

$query4 = "UPDATE medicines SET ppu='$nprice' WHERE product_name = '$pname'";
$result4 = mysqli_query($con,$query4);

echo "<script type='text/javascript'>\n";
echo "alert('Product Updated!!!');\n";
echo"window.location.href = 'update_medicines.php'";
echo "</script>";

}
	
mysqli_close($con);

?>