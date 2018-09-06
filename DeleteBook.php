<?php
include_once 'dbMySql.php';
$con = new DB_con();
if(isset($_POST['bookid']))
{
	$bookid=$_POST['bookid'];
	$res=$con->DeleteBookUsingId($bookid);
	if($res)
	{
		?>
		<script>
		alert('Record Deleted ...')
        window.location='DeleteBook.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Record cant Deleted !!!')
        window.location='DeleteBook.php'
        </script>
		<?php
	}
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System Using OOP</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <a href="index.php"><label>Library Management System Using OOP</label><a/>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table align="center">
	
	<tr>
    <th colspan="5">  <a href="ManagerMenu.php"><img src="b_back.jpg" alt="back" height="42" width="42"/></a></th>
    </tr>
	
    <tr>
    <td><input type="number" name="bookid" placeholder="Book Id" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="delete"><strong>Delete</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>