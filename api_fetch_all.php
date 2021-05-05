<?php

header('content-Type: application/json');
header('Acess-Control-Allow-origin: *');


include "configApi.php";


$sql = "SELECT * FROM student";



$result = mysqli_query($conn, $sql) or die ("connection failes.");


if(mysqli_num_rows($result) > 0 )
{
	
	$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($output);

} 
else 
{
        
    echo json_encode(array('message' => 'no record found.', 'status' => false));
}


?>