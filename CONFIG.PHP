<?php  

$server="localhost";
$username="root";
$password="";
$db="grip";

$conn= mysqli_connect($server,$username,$password,$db);

if ($conn) {
	//connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
   //connection not easablish
?>
