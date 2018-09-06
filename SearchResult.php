<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Database Operation Using OOP</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>



<?php
include_once 'dbMySql.php';
include_once 'header.php';
$con = new DB_con();

// data insert code starts here.
if(isset($_POST['showallbook'])) 
{
    $res = $con->searchAllBook();
    if(($res))
    {
        echo "<table border=1>";
            echo "<tr>";
//                echo "<th>Id</th>";
                echo "<th>Book Name</th>";
                echo "<th>Writer Name</th>";
                echo "<th>Category</th>";
                echo "<th>Quantity</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($res)){
            echo "<tr>";
                //echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['book_name'] . "</td>";
                echo "<td>" . $row['writer_name'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        //mysqli_free_result($result);
    }
    else
    {
        ?>
        <script>
        alert('error showing record...');
        window.location='SearchBook.php'
        </script>
        <?php
    }
}

if(isset($_POST['searchByBookName'])) 
{
    $bookname = $_POST['bookname'];
    $res = $con->searchBookUsingBookName($bookname);
    if(($res))
    {
        echo "<table border=1>";
            echo "<tr>";
//                echo "<th>Id</th>";
                echo "<th>Book Name</th>";
                echo "<th>Writer Name</th>";
                echo "<th>Category</th>";
                echo "<th>Quantity</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($res)){
            echo "<tr>";
                //echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['book_name'] . "</td>";
                echo "<td>" . $row['writer_name'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        //mysqli_free_result($result);
    }
    else
    {
        ?>
        <script>
        alert('error showing record...');
        window.location='SearchBook.php'
        </script>
        <?php
    }
}

if(isset($_POST['searchByWriterName'])) 
{
    $writername = $_POST['writername'];
    $res = $con->searchBookUsingWriterName($writername);
    if(($res))
    {
        echo "<table border=1>";
            echo "<tr>";
//                echo "<th>Id</th>";
                echo "<th>Book Name</th>";
                echo "<th>Writer Name</th>";
                echo "<th>Category</th>";
                echo "<th>Quantity</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($res)){
            echo "<tr>";
                //echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['book_name'] . "</td>";
                echo "<td>" . $row['writer_name'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        //mysqli_free_result($result);
    }
    else
    {
        ?>
        <script>
        alert('error showing record...');
        window.location='SearchBook.php'
        </script>
        <?php
    }
}

if(isset($_POST['searchByCategory'])) 
{
    $category = $_POST['category'];
    $res = $con->searchBookUsingCategory($category);
    if(($res))
    {
        echo "<table border=1>";
            echo "<tr>";
//                echo "<th>Id</th>";
                echo "<th>Book Name</th>";
                echo "<th>Writer Name</th>";
                echo "<th>Category</th>";
                echo "<th>Quantity</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($res)){
            echo "<tr>";
                //echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['book_name'] . "</td>";
                echo "<td>" . $row['writer_name'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        //mysqli_free_result($result);
    }
    else
    {
        ?>
        <script>
        alert('error showing record...');
        window.location='SearchBook.php'
        </script>
        <?php
    }
}
// data insert code ends here.

?>
<?php
include_once 'footer.php';
?>
</center>
</body>
</html>





















