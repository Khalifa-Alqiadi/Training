<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="css/style.css">
<style type="text/css">
.home-offer .content blockquote blockquote blockquote p strong {
	font-size: 20px;
}
</style>
<script src="jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="jquery.cycle.all.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
	$('#slide_image').cycle('fade');
    
});
</script>
</head>
<body>
<header class="header">
   <div class="logo">
      <img src="image/Picture1.png" alt="" height="97">
   </div>
   <div class="navbar">
      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#about us">about us </a>
       
         <nav class="dropdown">
            <button class="dropbtn">Travel essential 
               <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
               <a href="../About travel essential/safety travel tips.php">Sefety Travel Tip</a>
               <a href="../About travel essential/Advisory_covid-19.php">Adviscty covid-19</a>
            </div>
         </nav> 

         <a href="#Places">Places</a>
         <a href="#Tourist guides list">Tourist guides list</a>
      
         <nav class="dropdown">
            <button class="dropbtn">Service Requests
               <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
               <a href="#">Send New Requests</a>
               <a href="#">Pervious Requests</a>
            
            </div>
         </nav> 
         <a href="#Contact">Contact</a>
      </nav>
   </div>       

   <div class="login">
      <div class="icons"> 
         <div id="login-btn" class="fas fa-user"></div>
      </div>
   </div>  

</header>

<!-- home section starts  -->
<div class="slide">
<div class="container">
     <div id="slide_image">
     <img src="image/imagen2.png"style="width:100%" height="500px"/>
    <img src="image/imagen1.png" style="width:100%" height="500px"/>
     <img src="image/imagee3.png" style="width:100%" height="500px"/>
     </div>
     </div>
</div>
<!-- home section ends -->
<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">
<div class="box">
         <img src="image/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="image/icon-1.png" alt="">
         <h3>Events</h3>
      </div>

      <div class="box">
         <img src="image/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="image/icon-5.png" alt="">
         <h3>Plan your visit</h3>
      </div>
   </div>

</section>




<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About us</a>
         <a href="Places.php"> <i class="fas fa-angle-right"></i> Places</a>
         <a href="Toutist guide.php"> <i class="fas fa-angle-right"></i> Tourist guides</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Travel essential</a>
       
      </div>

      
      <div class="box">
         <h3>follow us</h3>
    
         <a href='https://twitter.com/Khouzamaweb?s=12'> <i class="fab fa-twitter"></i> twitter </a>
        <a href='https://www.linkedin.com/in/khouzama-website-250866233'> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

  
</section>

<!-- footer section ends -->

</body>
</html>