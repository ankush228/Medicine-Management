<?php

session_start();
$conn=mysqli_connect("localhost", "root", "") or die(mysqli_error());
mysqli_select_db($conn,"medicalstore") or die(mysqli_error());
if ($_POST) {
    
    $oldpass=$_POST["oldpass"];
    $newpass=$_POST["newpass"];
    $conpass=$_POST["conpass"]; 

    $users=$_SESSION['users'];
    $oqr=mysqli_query($conn,"SELECT password FROM users WHERE username='{$users}'") or die(mysqli_error());

    $odata=mysqli_fetch_row($oqr);
    if($odata[0]==$oldpass)
    {
        if($newpass==$conpass)
        {
            $q=mysqli_query($conn,"UPDATE users SET password='{$newpass}' WHERE username='{$users}'") or die(mysqli_error());

                        if($q)
                        {
                            echo "<script type='text/javascript'>\n";

                            echo "alert('Password changed successfully!');\n";

                            echo"window.location.href ='password_formpage.php'";
                            echo "</script>";
                        }

        } else {
                echo "<script type='text/javascript'>\n";

                echo "alert('New Password and Confirm Password not match!');\n";

                echo"window.location.href ='password_formpage.php'";
                echo "</script>";

        }
    }   
    else {
               
            echo "<script type='text/javascript'>\n";

                echo "alert('Old Password not match!');\n";

                echo"window.location.href ='password_formpage.php'";
                echo "</script>";
    }

}


?>