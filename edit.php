
<?php
include("config.php");
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$id=$_POST['name'];
	$EmissionDate=$_POST['EmissionDate'];
	$text=$_POST['text'];
	$result=mysqli_query($con,"update requests SET EmissionDate='$EmissionDate', text='$text', name='$name' where id='$id'");
	header("location: perviousrequest.php");
}
?>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$result=mysqli_query($con,"select * from requests where id=$id");
if($result){
while ($row=mysqli_fetch_array ($result))
{
	$name=$row['name'];
	$EmissionDate=$row['EmissionDate'];
	$text=$row['text'];
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Request Page</title>
<link href="CSS/TestRequest.css" rel="stylesheet" />
 
</head>

<body>
<section class="home" id="home">

    <div class="content">
        <h3>Request Service managment</h3>
        <p>Best Practices</p>
        <p class="phrase">To Update Your Request with the Simplest Way</p>
        <img class="photo" src="img/Request.jpeg"  />
       
    </div>


<div class="admin">
<section class="contact">
   <form name="form1" action="#" method="post">
      <h3>Enter your request</h3>
      <input type="text" name="name" placeholder="Enter your name" class="box">
      <input class="box" type="date" name="EmissionDate" required oninvalid="this.setCustomValidity('Please fill the field')"
    oninput="this.setCustomValidity('')" id="" value='<?php echo date("Y/m/d");?>' ><br /> <br /><br />
      <textarea name="text" class="box" required placeholder="Enter your message" oninvalid="this.setCustomValidity('Please fill the field')"
    oninput="this.setCustomValidity('')" id="" cols="30" rows="10"><?php echo $text=isset($_GET['text']) ? $_GET['text'] : '';?></textarea>
      <input type="hidden" name="id" value='<?php echo $id = isset($_GET['id']) ? $_GET['id'] : '';?>' >
<input class="btn" type="submit" name="update" value="Update">
   </form>

</section>
</section>

<script src="js/script.js"></script>
</div>
</html>