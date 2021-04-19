<?php
$database="medicalstore";
$cname = $_POST['companyname'];
$nemail = $_POST['newemail'];
$ncontact = $_POST['newcontact'];

$con = mysqli_connect("localhost","root" ,"");

    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }

mysqli_select_db($con,"$database");
$query = "SELECT company_name FROM companies WHERE company_name = '$cname'";
$result = mysqli_query($con,$query);
$row = mysqli_num_rows($result);
if($row===1){


if(isset($_POST['upemail'])){

$query1 = "UPDATE companies SET email='$nemail' WHERE company_name = '$cname'";
$result1 = mysqli_query($con,$query1);

echo "<script type='text/javascript'>\n";
echo "alert('E-mail Updated!!!');\n";
echo"window.location.href = 'update_companies.php'";
echo "</script>";

}

if(isset($_POST['upcontact'])){

$query2 = "UPDATE companies SET contact='$ncontact' WHERE company_name = '$cname'";
$result2 = mysqli_query($con,$query2);

echo "<script type='text/javascript'>\n";
echo "alert('Contact Updated!!!');\n";
echo"window.location.href = 'update_companies.php'";
echo "</script>";

}

if(isset($_POST['both'])){

$query3 = "UPDATE companies SET email='$nemail' WHERE company_name = '$cname'";
$result3 = mysqli_query($con,$query3);

$query4 = "UPDATE companies SET contact='$ncontact' WHERE company_name = '$cname'";
$result4 = mysqli_query($con,$query4);

echo "<script type='text/javascript'>\n";
echo "alert('Company Updated!!!');\n";
echo"window.location.href = 'update_companies.php'";
echo "</script>";

}
}
else{
	echo "<script type='text/javascript'>\n";
	echo "alert('Company not available!!');\n";
	echo"window.location.href = 'update_companies.php'";
	echo "</script>";
}	
mysqli_close($con);

?>