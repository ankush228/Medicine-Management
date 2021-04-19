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
            margin-right: 5px;
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
        	 margin-left: 320px;
        }
        
        
        
</style>
</head>
<body background="images/moh-drugs.jpg">
<div id="upper" style="background-color:0a2434;margin-top: -25px;">

<p id="nav"><b>CHANGE PASSWORD</b></p>
<br>
<div class="main">
<ul>
<li><a href="admin-account.php">Home</a></li>
<li><a href="medicines.php">Medicines</a></li>
<li><a href="companies.php">Companies</a></li>
<li><a href="new_sales.php">New Sales</a></li>
<li><a href="password_formpage.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>	
</ul>
</div>
</div>
<form action="password.php"  method="POST">
					<div style="background-color: #EEEEEE;float: right;width: 310px;padding-right: 20px;margin-right: 500px; border-radius:50px; border-color: black; border-style: solid;margin-top:80px;">
						<h2 style="color:#cd15a6; text-align: right;">change password</h2>
						<table border="0" align="center" width = "200" style="font-family:georgia;font-size:15px;">
							<tr>
								<td align="right" width="120" style="padding-right:5px">Old Password:</td>
								<td align="left" style="color:red;">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="oldpass" placeholder="Old Password" required = "true"/>								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">New Password:</td>
								<td align="left" style="color:red;">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="newpass" placeholder="New Password" required = "true"/>								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">Confirm Password:</td>
								<td align="left" style="color:red;">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="conpass" placeholder="Confirm Password" required = "true"/>								</td>
							</tr>
							<tr>
								<td colspan = "2">
									<input type="submit" name="submit" value = "Submit" style=" background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 100px; border-radius:5px; position:relative; left: 150px; top: 10px;">
								</td>
							</tr>
						</table>
						<br>
					</div>
					</form>

</div>



<div style="background-color:#000000;margin-top:430px;height:70px;margin-left:-10px;margin-right:-10px;">
<h2 style="text-align:center;color:#FFFFFF; padding-top: 7px;">DBMS PROJECT</h2>
</div>
</body>
</html>
</body>
</html>