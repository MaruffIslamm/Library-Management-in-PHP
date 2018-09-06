<?php
include_once 'dbMySql.php';
$con = new DB_con();

// data insert code starts here.
if(isset($_POST['add']))
{
	$bookname = $_POST['bookname'];
	$writername = $_POST['writername'];
	$category = $_POST['category'];
    $quantity = $_POST['quantity'];
	$res = $con->InsertIntoBook($bookname,$writername,$category,$quantity);
	if($res)
	{
		?>
		<script>
		alert('Record inserted...');
        window.location='AddNewBook.php'
        </script>
		<?php

	}
	else
	{
		?>
		<script>
		alert('error inserting record...');
        window.location='AddNewBook.php'
        </script>
		<?php
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
<body>
<center>

<div id="header">
	<div id="content">
    <a href="indexmy.php"><label>Library Management System Using OOP</label><a/>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
	
	<tr>
    <th colspan="5">  <a href="ManagerMenu.php"><img src="b_back.jpg" alt="back" height="42" width="42"/></a></th>
    </tr>
	
    <tr>
    <td><input type="text" name="bookname" placeholder="Book Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="writername" placeholder="Writer Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="category" placeholder="Category" required /></td>
    </tr>
    <tr>
    <td><input type="number" name="quantity" placeholder="Quantity" required /></td>
    </tr>    
    <tr>
    <td>
    <button type="submit" name="add"><strong>Add</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>