<?php

include("connection.php");
error_reporting(0);

 $_GET['rn'];
 $_GET['sn'];
 $_GET['cl'];

?>

<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="GET">
	Roll No <input type="text" name="rollno" value="<?php echo  $_GET['rn']; ?>"/> <br> <br>
    Name    <input type="text" name="studentname" value="<?php echo  $_GET['sn']; ?>"/> <br> <br>
	Class   <input type="text" name="class" value="<?php echo  $_GET['cl']; ?>"/><br> <br>
	        <input type="submit" name="submit" value="Update"/>
</form>


<?php

if($_GET['submit'])
 {
      $rollno =	$_GET['rollno'];
      $name =	$_GET['studentname'];
      $class =	$_GET['class'];

       $query = "UPDATE STUDENT SET Name='$name' , CLASS='$class' WHERE ROLLNO='$rollno' ";
       $data = mysqli_query($conn, $query);

   if($data)
      {
        echo "<font color='green'>Record updated. <a href='display.php'>check updated list here</a> ";
      }
   else
      {
	    echo "<font color='blue'>record not updated";
      }
}

   else
   {
	echo "<font color='red'>click on update button to save the changes";
   }

?>
</body>
</html>