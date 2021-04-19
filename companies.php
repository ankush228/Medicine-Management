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
            margin-right: 150px;
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
        
        #nav{
        	font-size:50px;
        	text-align:center;
        	color:white;
        	 margin-top:-10px;
        	 margin-left: 235px;
        }
        .search{
        	margin-top: 100px;
        }
        .table{
        	margin-left: 360px;
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
        .btn{
        	margin-left: -50px;
        	margin-top: 100px;
        }
        
</style>
</head>
<body background="images/moh-drugs.jpg">
<div id="upper" style="background-color:0a2434;margin-top: -25px;">

<p id="nav"><b>COMPANIES INFORMATION</b></p>
<br>
<div class="main">
<ul>
<li><a href="/dbms/admin-account.php">Home</a></li>
<li><a href="/dbms/insert_companies.php">Insert Companies</a></li>
<li><a href="update_companies.php">Update Companies</a></li>
<li><a href="delete_companies.php">Delete Companies</a></li>
<li><a href="logout.php">Logout</a></li>	
</ul>
</div>


</div>

<div>
<form class = "btn" action="search_company.php" method="POST">
<input style = "margin-left:450px;width:500px;height:25px; padding-left:10px; border-radius:5px;" size = "25" type="text" name="searcht" placeholder="Enter"/>
<input type="submit" name="search" value = "Search" style=" background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 100px; border-radius:5px;">

</form>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table class="table">
	<tr class="head">
		<th>CompanyId</th>
		<th>CompanyName</th>
		<th>Country</th>
		<th>E-mail</th>
		<th>Contact</th>
		<th>Address</th>
	</tr>
	<?php
$database="medicalstore";

$con = mysqli_connect("localhost","root" ,"");

    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }

mysqli_select_db($con,"$database");


$query1 = "SELECT * FROM companies";

$result = mysqli_query($con,$query1);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo   "<tr><td>".$row["company_id"]." "." </td><td> ". $row["company_name"] ." "." </td><td>". $row["country"]." "."</td><td>". $row["email"]." "."</td><td>". $row["contact"]." "."</td><td>". $row["address"]. "</td></tr>";
    
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
<h2 style="text-align:center;color:#FFFFFF; padding-top: 7px;">DBMS PROJECT</h2>
</div>
</body>
</html>