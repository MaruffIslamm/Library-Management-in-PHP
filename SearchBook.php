
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Database Operation Using OOP</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<?php
include_once 'header.php';
?>
<div id="body">
	<div id="content">
        <form method="post" action="SearchResult.php">
            <table align="center">
            
            <tr>
            <th colspan="5">  <a href="ManagerMenu.php"><img src="b_back.jpg" alt="back" height="42" width="42"/></a></th>
            </tr>
 
            <tr>
            <td>
            <button type="submit" name="showallbook"><strong>Show All Book</strong></button></td>
            </tr>            
            <tr>
            <td><input type="text" name="bookname" placeholder="Book Name"  /></td>
            </tr>
            <tr>
            <td>
            <button type="submit" name="searchByBookName"><strong>Search by Book Name</strong></button></td>
            </tr>            
            <tr>
            <td><input type="text" name="writername" placeholder="Writer Name"  /></td>
            </tr>
            <tr>
            <td>
            <button type="submit" name="searchByWriterName"><strong>Search by Writer Name</strong></button></td>
            </tr>            
            <tr>
            <td><input type="text" name="category" placeholder="Category"  /></td>
            </tr>   
            <tr>
            <td>
            <button type="submit" name="searchByCategory"><strong>Search by Category</strong></button></td>
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