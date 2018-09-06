<?php
// Start the session
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management Syste Using OOP</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<?php
include_once 'header.php';
?>
<div id="body">
	<div id="content">
    <table align="center">
    <tr>
	<th colspan="3"> Add New Book <a href="AddNewBook.php"><img src="b_view.jpg" alt="view" height="42" width="42"/></a></th>
	<th colspan="3"> Delete Book <a href="DeleteBook.php"><img src="b_view.jpg" alt="view" height="42" width="42"/></a></th>
	<th colspan="3"> Update Stock <a href="UpdateStock.php"><img src="b_view.jpg" alt="view" height="42" width="42"/></a></th>
	<th colspan="3"> Search Book <a href="SearchBook.php"><img src="b_view.jpg" alt="view" height="42" width="42"/></a></th>
	<th colspan="3"> Update Password <a href="UpdateManagerPassword.php"><img src="b_view.jpg" alt="view" height="42" width="42"/></a></th>
	<th colspan="3"> <?php echo $_SESSION["managerid"]." ,Log out";?> <a href="ManagerLogout.php"><img src="b_view.jpg" alt="view" height="42" width="42"/></a></th>	
    </tr>	
    </table>
    </div>
</div>
<?php
include_once 'footer.php';
?>
</center>
</body>
</html>