<?php

header('content-Type: application/json');
header('Acess-Control-Allow-origin: *');
header('Acess-Control-Allow-Methos: POST');
header('Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,content-Type,Acess-Control-Allow-Methos, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$rollno = $data['srollno'];
$name = $data['sname'];
$class = $data['sclass'];


include "configApi.php";


$sql = "UPDATE student SET name =  '{$name}' , class = '{$class}' WHERE rollno = {$rollno}";

if(mysqli_query($conn, $sql)) 
{
	
   echo json_encode(array('message' => ' update.', 'status' => true));

} 
else
{
        
        echo json_encode(array('message' => 'no update.', 'status' => false));
}

?>