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
        
        .form{
        	margin-top: 430px;
        	margin-left: 500px;
        	margin-right: -100px;
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

<div style="margin-top: -400px;">
<form class="form" action="update_phpcompanies.php" method="POST">
					<div style="background-color: #EEEEEE;float: right;width: 550px;padding-right: 20px;margin-right: 500px; border-radius:50px; border-color: black; border-style: solid;">
						<h2 style="color:#cd15a6; text-align: right;">Update Company</h2>
						<table border="0" align="center" width = "350" style="font-family:georgia;font-size:15px;">
							<tr>
								<td align="right" width="120" style="padding-right:5px">Company Name:</td>
								<td align="left" style="color:red;">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="companyname" placeholder="Company Name" required = "true"/>
									
									</td>
									
							</tr>
							
							<tr>
							    
								<td align="right" width="120" style="padding-right:5px"></td>
								<td align="left" style="color:red;">
								
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="newemail" placeholder="New E-mail"/>
									</td>
								
							</tr>
							
							<tr>
								<td colspan = "2">
								<br>
									<input type="submit" name="upemail" value = "Update E-mail!" style="margin-left:14.5px; background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 120px; border-radius:5px; position:relative; left: 330px; top: -50px;">

								</td>
							</tr>
							
							<tr>
							    
								<td align="right" width="120" style="padding-right:5px ;"></td>
								<td align="left" style="color:red;">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="newcontact" placeholder="New Contact"/>
									</td>
								
							</tr>
							
							<tr>
								<td colspan = "2">
								<br>
									<input type="submit" name="upcontact" value = "Update Contact!" style="margin-left:14.5px; background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 120px; border-radius:5px; position:relative; left: 330px; top: -50px;">

								</td>
							</tr>
							
							<tr>
								<td colspan = "2">
								<br>
									<input type="submit" name="both" value = "Update Company!" style=" background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 120px; border-radius:5px; position:relative; left: 130px; top: -30px;">

								</td>
							</tr>
							
							
							
							
							 
						</table>
						<br>
					</div>
					</form>

</div>

<div style="background-color:#000000;margin-top:830px;height:70px;margin-left:-10px;margin-right:-10px;">
<h2 style="text-align:center;color:#FFFFFF; padding-top: 7px;">DBMS PROJECT</h2>
</div>
</body>
</html>