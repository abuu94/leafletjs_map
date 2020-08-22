<?php
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(!$conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
   echo 'Connected successfully<br>';
   
    $sql = 'SELECT id, name, latitude, longitude FROM worlddata';
    mysqli_select_db(  $conn ,'home_leafletdb' );
	 $retval = mysqli_query( $conn, $sql);
	 
	  if(!$retval ) {
      die('Could not retrieve data: ' . mysqli_error($conn));
   }
   
   while($row = $retval->fetch_assoc()) {
      echo "id :{$row['id']}  \t ".
         "name : {$row['name']} \t ".
         "lat : {$row['latitude']} \t ".
		 "lng : {$row['longitude']}  ".
         "<br><br>";
   }
   
   echo "Fetched Data successfully\n";
   
   

	
   mysqli_close($conn);
?>