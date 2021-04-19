<?php

session_start();
if(!$_SESSION['users']){

header("Location: signin.php");
}
?>
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
    die('Could not connect: ' . mysqli_error());
    }

mysqli_select_db($con,"$database");
$query2 = "SELECT company_name FROM companies where company_name = '$pname'";
$result = mysqli_query($con,$query2);
if (mysqli_num_rows($result) > 0){
echo "<script type='text/javascript'>\n";
echo "alert('Product Already Exists!!!');\n";
echo"window.location.href = 'insert_medicines.php'";
echo "</script>";
die();
}
else{
$query1 = "INSERT INTO companies (company_id, company_name, country, email, contact, address) VALUES (NULL, '$pname', '$cname', '$category', '$quantity', '$price')"; 

 mysqli_query($con, $query1) or die(mysqli_error($con));
mysqli_close($con);

echo "<script type='text/javascript'>\n";
echo "alert('Company has been added successfully');\n";
echo"window.location.href = 'insert_companies.php'";
echo "</script>";
}
?>