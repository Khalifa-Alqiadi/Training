
<?php 
include("inc/header.php"); 
?>
<style>
table {
    background-color: #8a5082;
}
table, .table {
    color: #fff;
}
</style>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Pervious Request page </title>
<link href="CSS/PreviousRequestStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="owl-carousel owl-theme blog-post">
<div class="blog-content" data-aos="fade-right" data-aos-delay="200"><img style=" width: 1240px;; height:400px; margin-left:9%; margin-top:-1%;" src="img/request back.jpg" alt="post-1">
<div class="content">
<h3>Pervious Request Service managment</h3>
 <p>Best Practices</p>
    <p class="phrase">To Track the Status of Your Requests</p>
  </div>
  <br><br>
<div style="margin-left:9.8%;" class="admin2">
<h2>User Management</h2>

<?php
		include_once("inc/config.php");
		$sqlQuery = "SELECT * FROM requests LIMIT 5";
		$resultSet = mysqli_query($con, $sqlQuery) or die("database error:". mysqli_error($con));
		?>
		<table id="editableTable" class="table table-bordered">
			<thead>
				<tr>
					<th style="text-align:center;">Id</th>
					<th style="text-align:center;">Name</th>
                    <th style="text-align:center;">EmissionDate</th>
					<th style="text-align:center;">Request Text</th>
					<th style="text-align:center;">RequestReply</th>
                    <th style="text-align:center;">RequestStatus</th>	
                    <th style="text-align:center; width:270px;">Edit</th>												
				</tr>
			</thead>
			<tbody>
				<?php while( $requests = mysqli_fetch_assoc($resultSet) ) { ?>
				   <tr id="<?php echo $requests ['id']; ?>">
				   <td><?php echo $requests ['id']; ?></td>
				   <td><?php echo $requests ['name']; ?></td>
                      <td><?php echo $requests ['EmissionDate']; ?></td>
				   <td><?php echo $requests ['text']; ?></td>
				   <td><?php echo $requests ['RequestReply']; ?></td>  				   				   				   <td><?php echo $requests ['RequestStatus']; ?></td>
				   </tr>
				<?php } ?>
			</tbody>
		</table>	
  </div>
</div>
<script src="plugin/bootstable.js"></script>
<script src="js/editable.js"></script>
	</div>
  
</body>
</html>
