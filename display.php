
<style>
	td
	{
      padding:10px;
	}
</style>


<?php

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0)
{

?>
<table>
	<tr>
		<th> Roll No </th>
		<th> Student Name</th>
		<th> Class</th>
	</tr>
	
<?php
    
    while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
		<td>".$result['rollno']."</td>
		<td>".$result['name']."</td>
		<td>".$result['class']."</td>
		<td> <a href='retrieve.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'>Edit</a></td>
		<td>Delete</td>
	         </tr>";
	}
}
else
{
	echo "no record";
}

?>
</table>
