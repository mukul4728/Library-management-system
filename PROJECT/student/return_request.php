<?php
require('dbconn.php');

$id=$_GET['id'];

$roll=$_SESSION['RollNo'];

$sql="insert into LMS.return (RollNo,BookId) values ('$roll','$id')";

if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:1; url=current.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=current.php", true, 303);

}




?>