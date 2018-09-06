<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', "library");

class DB_con
{	
	public $conn;
	
	function __construct()
	{
		$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysqli_connect_error());
	}
	
	public function InsertIntoStudent($name,$password,$contact)
	{	
		$sql = "INSERT into student( name,password,contact) VALUES('$name','$password','$contact')";
		if(mysqli_query($this->conn, $sql)){
			//echo "Records inserted successfully.";
			return true;
		} else{
			//echo "ERROR: Could not able to execute '$sql'. " . mysqli_error($conn);
			return false;
		}
	}

	public function InsertIntoBook($bookname,$writername,$category,$quantity)
	{	
		$sql = "INSERT into book( book_name,writer_name,category,quantity) VALUES('$bookname','$writername','$category','$quantity')";
		if(mysqli_query($this->conn, $sql)){
			//echo "Records inserted successfully.";
			return true;
		} else{
			//echo "ERROR: Could not able to execute '$sql'. " . mysqli_error($conn);
			return false;
		}
	}	
	
	public function selectStudent($studentid,$studentpassword)
	{	
		$sql = "SELECT * FROM student WHERE id = '$studentid' and password = '$studentpassword' " ;
		$res = mysqli_query($this->conn, $sql);
		if(mysqli_num_rows($res) >0){
		   return true;
		}else{
		   return false;
		}
	}

	public function selectManager($manager_id,$manager_password)
	{	
		$sql = "SELECT * FROM manager WHERE manager_id = '$manager_id' and manager_password = '$manager_password' " ;
		$res = mysqli_query($this->conn, $sql);
		if(mysqli_num_rows($res) >0){
		   return true;
		}else{
		   return false;
		}		
	}	
	
	public function searchAllBook()
	{	
		$sql = "SELECT book_name,writer_name,category,quantity FROM book";
		$res = mysqli_query($this->conn, $sql);
		//$result = mysqli_fetch_array($res);
		return $res;
	}

	public function searchBookUsingBookName($bookname)
	{	
		$sql = "SELECT book_name,writer_name,category,quantity FROM book WHERE book_name = '$bookname' ";
		$res = mysqli_query($this->conn, $sql);
		//$result = mysqli_fetch_array($res);
		return $res;
	}

	public function searchBookUsingWriterName($writername)
	{	
		$sql = "SELECT book_name,writer_name,category,quantity FROM book WHERE writer_name = '$writername' ";
		$res = mysqli_query($this->conn, $sql);
		//$result = mysqli_fetch_array($res);
		return $res;
	}

	public function searchBookUsingCategory($category)
	{	
		$sql = "SELECT book_name,writer_name,category,quantity FROM book WHERE category = '$category' ";
		$res = mysqli_query($this->conn, $sql);
		$result = mysqli_fetch_array($res);
		return $res;
	}
	
	
	public function DeleteBookUsingId($bookid)
	{
		$sql = "DELETE FROM book WHERE book_id = '$bookid' ";
		if(mysqli_query($this->conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
	public function UpdateBookUsingId($bookid,$addstock)
	{	
		$sql = "UPDATE book SET quantity='$addstock' WHERE book_id = '$bookid' ";
		if(mysqli_query($this->conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	public function UpdateManagerPasswordUsingId($managerid,$newpassword,$oldpassword)
	{	
		$sql = "UPDATE manager SET manager_password = '$newpassword' WHERE manager_id = '$managerid' AND manager_password = '$oldpassword' ";
		if(mysqli_query($this->conn, $sql)){
			return true;
		}else{
			return false;
		}
	}	

	public function UpdateStudentPasswordUsingId($studentid,$newpassword,$oldpassword)
	{	
		$sql = "UPDATE student SET password = '$newpassword' WHERE id = '$studentid' AND password = '$oldpassword' ";
		if(mysqli_query($this->conn, $sql)){
			return true;
		}else{
			return false;
		}
	}		
	
}

?>