<?php
$a=$_REQUEST['strMessage'];





//connection
$con=mysqli_connect("localhost","root","","contactt");
if(!$con)
{
    die ("could not connect".mysqli_connect_error());
}

$sql= "INSERT INTO newsletter(emaill) VALUES ('$a')";

$result = mysqli_query($con,$sql);
if($result)
{


header("location:index.php");
}
 else
{
echo "Error in inserting".mysqli_error($con);
}



mysqli_close($con);



?>