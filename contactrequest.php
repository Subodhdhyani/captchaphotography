<?php
$a=$_REQUEST['strName'];
$b=$_REQUEST['strEmail'];
$c=$_REQUEST['strMessage'];





//connection
$con=mysqli_connect("localhost","root","","contactt");
if(!$con)
{
    die ("could not connect".mysqli_connect_error());
}

$sql= "INSERT INTO contactus(namee,emaill,messagee) VALUES ('$a','$b','$c')";
$result = mysqli_query($con,$sql);
if($result)
{


header("location:contact.php");
}
 else
{
echo "Error in inserting".mysqli_error($con);
}



mysqli_close($con);


?>