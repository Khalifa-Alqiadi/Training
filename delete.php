
?>
<?php 
include("config.php");
$id=$_GET['id'];
$result=mysqli_query($con,"DELETE FROM requests WHERE id=$id");
header('location:perviousrequest.php');
?>
