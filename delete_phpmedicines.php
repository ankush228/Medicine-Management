<?php
$database="medicalstore";
$pname = $_POST['productname'];

$con = mysqli_connect("localhost","root" ,"");

    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }

mysqli_select_db($con,"$database");
if(isset($_POST['delete'])){

$query2 = "SELECT * FROM medicines WHERE product_name='$pname'";
$result2 = mysqli_query($con,$query2);
if (mysqli_num_rows($result2) > 0){

$query1 = "DELETE FROM medicines WHERE product_name = '$pname'";
$result1 = mysqli_query($con,$query1);

echo "<script type='text/javascript'>\n";
echo "alert('Product Deleted!!!');\n";
echo"window.location.href = 'delete_medicines.php'";
echo "</script>";
}
else{
echo "<script type='text/javascript'>\n";
echo "alert('Product Not Found!! TRY AGAIN!!');\n";
echo"window.location.href = 'delete_medicines.php'";
echo "</script>";
}

}

	
mysqli_close($con);

?>