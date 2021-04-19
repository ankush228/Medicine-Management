<?php

session_start();
if(!$_SESSION['users']){

header("Location: signin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title> MEDICINE MANAGEMENT</title>
<style>
	 #upper{
            background: #071133;
            color: white;
            display:flex;
            justify-content: space-between;
            padding-top:3rem;
            padding-left:6rem;
            padding-right:6rem;
            margin-left: -10px;
            margin-right: -10px;
        }
        .main{

        	font-family: 'Raleway', sans-serif;
            font-size: 30px;
            margin-top: 40px;
            margin-left: -2000px;
            margin-right: 160px;
            margin-bottom: -30px;
        }
                #upper ul{
            display: flex;
            
        }
        #upper ul li{
            list-style: none;
            padding:20px;
            font-size: 22px;
        }

 #upper ul li a{
            color: white;
            text-decoration: none;;
        }
        #upper li :hover{
            background:#02F072;
            color:black;
            
            padding:10px;
            border-radius: 5px;
        }
        
        .img{
        	background-color: #0a2434;
        	width: 15%;
        	
        	border-color: white;
        	border-width: 100px;
        	border-radius: 8px;
        }
        #image{
        	margin-left: 10px;
        	
        	
        }
        #nav{
        	font-size:50px;
        	text-align:center;
        	color:white;
        	 margin-top:-10px;
        	 margin-left: 290px;
        }
        .search{
        	margin-top: -50px;
        }
        .table{
        	margin-left: 400px;
        	margin-top: -180px;
        	background-color: black;
        	color: white;
        }
        .head{
        	background-color: #17e3b7;
        	color: black;
        	font-size: 22px;
        }
        tr{
        	background-color: white;
        	color: black;
        }
        
</style>
</head>
<body background="images/moh-drugs.jpg">
<div id="upper" style="background-color:0a2434;margin-top: -25px;">

<p id="nav"><b>MEDICINE MANAGEMENT</b></p>
<br>
<div class="main">
<ul>
<li><a href="medicines.php">Medicines</a></li>
<li><a href="companies.php">Companies</a></li>
<li><a href="new_sales.php">New Sales</a></li>
<li><a href="password_formpage.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>	
</ul>
</div>


</div>
<div class="img">
	<p style="margin-left:30px;color:white;font-size:20px;padding-top:10px;">WELCOME:<br><h3 style="color:white; padding-left:20px;padding-bottom:10px;"><?php echo $_SESSION['users']; ?></h3></p>
 
</div>
<br>
<div class="search">
<form action="search_medicine.php" method="POST">
<input style = "margin-left:450px;width:500px;height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="searcht" placeholder="Enter"/>
<input type="submit" name="search" value = "Search" style=" background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 100px; border-radius:5px;">

</form>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table class="table">
	<tr class="head">
		<th>ProductId</th>
		<th>ProductName</th>
		<th>CompanyName</th>
		<th>ProductCategory</th>
		<th>Quantity</th>
		<th>PricePerUnit</th>
	</tr>
	<?php
$database="medicalstore";

$con = mysqli_connect("localhost","root" ,"");

    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }

mysqli_select_db($con,"$database");


$query1 = "SELECT * FROM medicines";

$result = mysqli_query($con,$query1);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo   "<tr><td>".$row["product_id"]." "." </td><td> ". $row["product_name"] ." "." </td><td>". $row["company_name"]." "."</td><td>". $row["product_category"]." "."</td><td>". $row["quantity"]." "."</td><td>". $row["ppu"]. "</td></tr>";
    
	}
	echo "</table>";
}
 else {
    echo "0 results";
}


mysqli_close($con);	
?>	
</table>

<div style="background-color:#000000;margin-top:130px;height:70px;margin-left:-10px;margin-right:-10px;">
<h2 style="text-align:center;color:#FFFFFF; padding-top: 10px;">DBMS PROJECT</h2>
</div>
</body>
</html>