<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Database Operation Using OOP</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<center>
<?php
include_once 'header.php';
include_once 'dbMySql.php';
$con = new DB_con();

$passwordErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$managerid = $_POST["id"];
	$oldpassword = $_POST["oldpassword"];
	$newpassword = $_POST["newpassword"];
	$retypenewpassword = $_POST["retypenewpassword"];

	if($newpassword == $retypenewpassword)
	{
		$res=$con->UpdateManagerPasswordUsingId($managerid,$newpassword,$oldpassword);
		if($res)
		{
			?>
			<script>
			alert('Password Updated ...')
	        window.location='Manager.php'
	        </script>
			<?php
		}
		else
		{
			?>
			<script>
			alert('Password Update Failed !!!')
	        window.location='UpdateManagerPassword.php'
	        </script>
			<?php
		}		
	}
	else
	{
		$passwordErr = "Both new password and retype new password should be same";
	}
}
?>
<div id="body">
	<div id="content">
        <form method="post" >
            <table align="center">
            
            <tr>
            <th colspan="5">  <a href="ManagerMenu.php"><img src="b_back.jpg" alt="back" height="42" width="42"/></a></th>
            </tr>
             
            <tr>
            <td><input type="text" name="id" placeholder="Id" required="" /></td>
            </tr>           
            <tr>
            <td><input type="text" name="oldpassword" placeholder="Old Password" required="" /></td>
            </tr>            
            <tr>
            <td><input type="text" name="newpassword" placeholder="New Password"  required="" /></td>
            </tr>
            <tr>
            <td><input type="text" name="retypenewpassword" placeholder=" Retype New Password" required="" /></td>
            </tr>
            <tr>
            	<td><span class="error">* <?php echo $passwordErr;?></span></td>
            </tr>                
            <tr>
            <td>
            <button type="submit" name="update"><strong>Update</strong></button></td>
            </tr>
            </table>
        </form>    

    </div>
</div>
<?php
include_once 'footer.php';
?>
</center>
</body>
</html>