<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
if(!$conn ) {
    die('Could not connect: ' . mysqli_error($conn));
}
   
$sql = 'SELECT id, name, latitude, longitude FROM worlddata';//'SELECT id, name, latitude, longitude FROM worlddata'
mysqli_select_db(  $conn ,'home_leafletdb' );//home_leafletdb
$retval = mysqli_query( $conn, $sql);
if(!$retval ) {
    die('Could not retrieve data: ' . mysqli_error($conn));
}


$dataArray = array(); 
while($row = $retval->fetch_assoc()) {
    array_push($dataArray,array(
        'id'=>$row['id'],
        'name'=>$row['name'],
        'latitude'=>$row['latitude'],
        'longitude'=>$row['longitude'],
        )
    );
}
echo json_encode($dataArray);
   
mysqli_close($conn);
?>
