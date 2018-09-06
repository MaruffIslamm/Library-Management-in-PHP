<?php
include_once 'dbMySql.php';
$con = new DB_con();
$passwordErr = "";
// data insert code starts here.
if(isset($_POST['signup']))
{
	$studentname = $_POST['name'];
	$password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $contact = $_POST['contact'];



    if($password == $confirmpassword)
    {
        $res = $con->InsertIntoStudent($studentname,$password,$contact);
        if($res)
        {
            ?>
            <script>
            alert('Record inserted...');
            window.location='SignUpStudent.php'
            </script>
            <?php

        }
        else
        {
            ?>
            <script>
            alert('error inserting record...');
            window.location='SignUpStudent.php'
            </script>
            <?php
        }
    }
    else
    {
        $passwordErr = "Password and Confirm Password filed must be same";
    }
}
// data insert code ends here.

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System Using OOP</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<style>
.error {color: #FF0000;}
</style>
<body>
<center>

<div id="header">
	<div id="content">
    <a href="index.php"><label>Library Management System Using OOP</label><a/>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
	
	<tr>
    <th colspan="5">  <a href="Student.php"><img src="b_back.jpg" alt="back" height="42" width="42"/></a></th>
    </tr>
	
    <tr>
    <td><input type="text" name="name" placeholder="Student Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="password" placeholder="Password" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="confirmpassword" placeholder="Confirm Password" required /></td>
    </tr> 
    <tr>
    <td><input type="text" name="contact" placeholder="Contact" required /></td>
    </tr>
    <tr>
        <td><span class="error">* <?php echo $passwordErr;?></span></td>
    </tr>             
    <tr>
    <td>
    <button type="submit" name="signup"><strong>Sign Up</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>