<?php
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn1 = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(!$conn1 ) {
      die('Could not connect: ' . mysqli_error($conn1));
   }
   
   //echo 'Connected successfully<br>';


    $sql = 'SELECT name FROM worlddata WHERE id=1';
    mysqli_select_db(  $conn1 ,'home_leafletdb' );
	 $retval = mysqli_query( $conn1, $sql);
	 
	  if(!$retval ) {
      die('Could not retrieve data: ' . mysqli_error($conn1));
   }
   
   while($row = $retval->fetch_assoc()) {
      echo "EMP ID :{$row['name']}  <br> ";
         
   }

	//function writeMsg() {
		
		
	// $n = "SELECT namr FROM worlddata WHERE id=1 ";
		
	
		// return $n;
	 
  
	//}

	//writeMsg(); 
	
	
    
 
   
   mysqli_close($conn1);
?>