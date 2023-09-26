<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Request Page</title>
<link href="CSS/SendRequestStyle.css" rel="stylesheet" />
</head>

<body>
<section class="home" id="home">

    <div class="content">
        <h3>Request Service managment</h3>
        <p>Best Practices</p>
        <p class="phrase">To Request a Touristguide with the Simplest Way</p>
        <img class="photo" src="img/message.png"  />
       
    </div>


<div class="admin">
<section class="contact">
   <form action="#" method="post">
      <h3>Enter your request</h3>
      <input type="text" name="name" placeholder="Enter your name" required oninvalid="this.setCustomValidity('Please fill the field')"
    oninput="this.setCustomValidity('')" id="" class="box">
      <input class="box" type="date" name="EmissionDate" required oninvalid="this.setCustomValidity('Please fill the field')"
    oninput="this.setCustomValidity('')" id="" value='<?php echo date("Y/m/d");?>' ><br /> <br /><br />
      <textarea name="text" class="box" required placeholder="Enter your message" oninvalid="this.setCustomValidity('Please fill the field')"
    oninput="this.setCustomValidity('')" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
    
   </form>
</section>
</section>
</div>
<?php
include("config2.php");
$id = isset($_POST['id']) ? $_POST['id'] : "";
$text = isset($_POST['text']) ? $_POST['text'] : "";
$EmissionDate = isset($_POST['EmissionDate']) ? $_POST['EmissionDate'] : "";
$name = isset($_POST['name']) ? $_POST['name'] : "";
$requestReply = isset($_POST['RequestReply']) ? $_POST['RequestReply'] : "";
$requestStatus = isset($_POST['RequestStatus']) ? $_POST['RequestStatus'] : "";
$sql="insert into requests (EmissionDate, text, name, RequestReply, RequestStatus) values ('$EmissionDate','$text', '$name','$RequestReply','$RequestStatus')";
if(!mysqli_query($con,$sql))
{
	die('error: '.mysqli_error($con));
}
mysqli_close($con);
?>
</html>