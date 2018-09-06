<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt create table query execution
$sql1 = "CREATE TABLE student(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    contact VARCHAR(70) NOT NULL UNIQUE
)";
if(mysqli_query($link, $sql1)){
    echo "student Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Attempt create table query execution
$sql2 = "CREATE TABLE book(
    book_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    book_name VARCHAR(30) NOT NULL,
    writer_name VARCHAR(30) NOT NULL,
    category VARCHAR(70) NOT NULL,
    quantity INT NOT NULL 
)";
if(mysqli_query($link, $sql2)){
    echo "book Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


$sql3 = "CREATE TABLE manager(
    manager_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    manager_name VARCHAR(30) NOT NULL,
    manager_password VARCHAR(30) NOT NULL,
    manager_contact VARCHAR(70) NOT NULL
)";
if(mysqli_query($link, $sql3)){
    echo "manager Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
?>