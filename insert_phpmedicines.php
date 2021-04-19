<?php
$database="medicalstore";
$pname = $_POST['productname'];
$cname = $_POST['companyname'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$con = mysqli_connect("localhost","root" ,"");

    if (!$con)
    {
    die('Could not connect: ' . mysqli_error($con));
    }

mysqli_select_db($con,"$database");
$query2 = "SELECT product_name FROM medicines where product_name = '$pname'";
$result = mysqli_query($con,$query2);
if (mysqli_num_rows($result) > 0){
echo "<script type='text/javascript'>\n";
echo "alert('Product Already Exists!!!');\n";
echo"window.location.href = 'insert_medicines.php'";
echo "</script>";
die();
}
else{

$query1 = "INSERT INTO medicines (product_id, product_name, company_name, product_category, quantity, ppu) 
	VALUES(NULL, '$pname', '$cname', '$category', '$quantity', '$price')"; 
//mysqli_query($con,"INSERT INTO medicines (product_id, product_name, company_name, product_category, quantity, ppu) 
	//VALUES(NULL, 'shubham', 'shubham', 'syrup', '23', '12')") or die(mysqli_error($con));
//$query1 = "INSERT INTO medicines (product_id, product_name, company_name, product_category, quantity, ppu) VALUES (NULL, 'shubham', 'shubham', 'syrup', '23', '12')";
//	var_dump(mysqli_query($con,$query1));
//	die();


mysqli_query($con, $query1) or die(mysqli_error($con));
mysqli_close($con);

echo "<script type='text/javascript'>\n";
echo "alert('Medicine Has been added successfully');\n";
echo"window.location.href = 'insert_medicines.php'";
echo "</script>";
}
?>