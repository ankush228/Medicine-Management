<!DOCTYPE html>
<html>
<head>
<title> MEDICINE MANAGEMENT</title>
<style>

#login{
		text-align: center;
	}
</style>
</head>
<body background="images/moh-drugs.jpg">
	<div style=" margin-top: -9px;margin-left: -10px; margin-right: -11px;">
	<div style=" border-color:#00994d; border-style:outset; border-width:20px;height:120px; padding-top:15px;">
<div style="background-color:#0a2434; margin-top: -60px; height: 140px;">
	
<h1 style="font-size:60px;text-align:center;color:white; padding-top:40px; padding-left: 30px;">MEDICINE MANAGEMENT</h1>
	</div>
</div>
</div>
<br>
<br>
<br>
<div> 
<form action="signinprocess.php" method="POST">
					<div style="background-color: #EEEEEE;float: right;width: 310px;padding-right: 20px;margin-right: 500px; border-radius:50px; border-color: black; border-style: solid;">
						<h2 style="color:#cd15a6; text-align: right;">LOGIN</h2>
						<table border="0" align="center" width = "200" style="font-family:georgia;font-size:15px;">
							<tr>
								<td align="right" width="120" style="padding-right:5px">Username:</td>
								<td align="left" style="color:red;">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="username" placeholder="Username" required = "true"/>								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">Password:</td>
								<td align="left" style="color:red;">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="password" placeholder="Password" required = "true"/>								</td>
							</tr>
							<tr>
								<td colspan = "2">
									<input type="submit" name="submit" value = "Login!" style=" background:#cd15a6;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 100px; border-radius:5px; position:relative; left: 150px; top: 10px;">
								</td>
							</tr>
						</table>

						<br>

						<div id="login">
						<p>Not an user? <a href="signup.php"><b>Sign Up</b></a></p>
						</div>
					</div>
					</form>

</div>


<div style="background-color:#000000;margin-top:355px;height:60px;margin-bottom: -500px;margin-left:-10px;margin-right:-10px;">
<h2 style="text-align:center;color:#FFFFFF; padding-top: 13px;">DBMS PROJECT</h2>

</div>
</body>
</html>