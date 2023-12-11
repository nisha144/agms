<?php 

$servername="localhost";
         $username="root";
         $password="";
         $dbname="agmsdb";
         $conn=  mysqli_connect($servername,$username,$password,$dbname);


         if (!$conn) {
	echo ("<script>alert('Connection Failed.')</script>");
         }
         return $conn;



 ?>




