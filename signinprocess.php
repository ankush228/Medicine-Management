<?php
$database ="medicalstore";
$username = $_POST['username'];
$password = $_POST['password'];

$con = mysqli_connect("localhost","root","");

if(!$con){

  die("Could not connect: ". mysqli_error());
}

mysqli_select_db($con,"$database");
$query = "SELECT * FROM users where username ='$username' and password='$password'";

$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);

mysqli_close($con);

if($count === 1){

session_start();
$_SESSION['users'] = $username;

echo "<script type='text/javascript'>\n";

echo "alert('Login Successful $username');
\n";

echo"window.location.href ='admin-account.php'";

echo "</script>";
}
else{
echo "<script type='text/javascript'>\n";

echo "alert('Invalid Username or Password...Try Again!');\n";

echo"window.location.href ='signin.php'";
echo "</script>";
}

?>