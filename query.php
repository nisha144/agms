<?php
include('agmsdb/dbconnection.php');



class query
{
	

	function insert_painting($var)
	{

			$connection=new DBConnection();//creating the object of the Dbconnection
			$conn=$connection->dbconnect();

			$ptitle=$var['title'];
			$artistname=$var['artistname'];
			$price=$var['price'];
			


			$sql="
					INSERT INTO 	
									painting

								(
									Title,
									ArtistName,
									
									Price
								)				
					VALUES		
								(
									'$title',
									'$artistname',
									'$price',
									
								)";
			$conn->query($sql); 
	}

	function insert_artist($var)
   		{
	       $connection=new DBConnection();
	       $conn=$connection->dbconnect();

	       $fname=$var['fname'];
			$mname=$var['mname'];
			$lname=$var['lname'];
			$gender=$var['gender'];
			$address=$var['address'];
			
			$contact=$var['contact'];

	       $sql="
	        INSERT INTO
	                    Artist
	                (
	                  fname,
                                    mname,
		lname,
		address,
		contact
	                  
	                )   
	        VALUES
	                (
	                  '$fname',
	                  '$mname',
	                  '$lname',
		'$address',
		'$contact',
	                )";
			$conn->query($sql);//connection established
	}
	
	function display_painting(){
		$connection=new DBConnection();
	    $conn=$connection->dbconnect();
        
        $sql="SELECT * FROM  painting";
        $result=$conn->query($sql);
        return $result;
	}
	function display_artist(){
	    $connection=new DBConnection();
	    $conn=$connection->dbconnect();
        $sql="SELECT * FROM  artist";
        $result=$conn->query($sql); 
        return $result;

	}
	function delete_paintings(){
	  $pid=$_GET['id'];
      $connection=new DBConnection();
	  $conn=$connection->dbconnect();
	  $sql="DELETE FROM paintings WHERE pid=$pid";
      $conn->query($sql);
	}
	function delete_artist()
	{
		$connection=new DBConnection();
		$conn=$connection->dbconnect();
		$id=$_GET['id'];
		$sql="DELETE FROM artist WHERE aid=$id";
        $conn->query($sql);
    }
    function edit_artist(){
    	$connection=new DBConnection();
    	$conn=$connection->dbconnect();
    	$sql="SELECT * FROM Artist WHERE aid=".$_GET['id'];
        $result=$conn->query($sql);
    	return $result;
    }
    function confirm_edit_artist()
    {
        $id=$_POST['aid'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $address=$_POST['address'];
        $price=$_POST['price'];
      	$connection =new DBConnection();
    	$conn=$connection->dbconnect();
        $sql="UPDATE Artist
        SET fname='$fname',
            fname='$mname',
            fname='$lname',
            fname='$address',
            fname='$contact',
        WHERE aid=$id";
        $conn->query($sql); 

  }
   function edit_painting()
  {
 	$connection=new DBConnection();
 	$conn=$connection->dbconnect();
 	$sql="SELECT * FROM  painting where pid=".$_GET['id'];
    $result=$conn->query($sql);
    return $result;
  }
  function confirm_edit_painting()
  {
  	$connection=new DBConnection();
  	$conn=$connection->dbconnect();
  	$id=$_POST['pid'];
  	$title=$_POST['title'];
  	$artistname=$_POST['artistname'];
  	$price=$_POST['price'];

                  
  	$sql="UPDATE painting
        SET Title='$title',
            
            
           ArtistName='$artistname',
            Price='$price'
         WHERE pid=$id";
         $conn->query($sql); 
  }
}
$q=new query();
?>