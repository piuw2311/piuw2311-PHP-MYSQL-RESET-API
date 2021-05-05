<?php

include("connection.php");
error_reporting(0);

?>


<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="GET">
	Roll No <input type="text" name="rollno" value=""/> <br> <br>
    Name    <input type="text" name="studentname" value=""/> <br> <br>
	Class   <input type="text" name="class" value=""/><br> <br>
	        <input type="submit" name="submit" value="Submit"/>
</form>

<?php

if($_GET['submit'])
{
	$rn = $_GET['rollno'];
    $sn = $_GET['studentname'];
    $cl = $_GET['class'];

	if($rn!="" && $sn!="" && $cl!="")

	  {
          $query = "INSERT INTO STUDENT VALUES ('$rn','$sn','$cl')";

          $data = mysqli_query($conn, $query);

          if($data)

              {
                  echo "Data inserted into database";
              }
      }
          else

             {

    	          echo " all fileds are required";
             }
}

?>
</body>
</html>