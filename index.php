<?php 
include("inc/header.php"); 
?>
<style>
table {
    background-color: #181818;
}
table, .table {
    color: #fff;
}
</style>
<div class="container">	
	<div class="row">	
		<?php
		include_once("inc/config.php");
		$sqlQuery = "SELECT * FROM requests LIMIT 5";
		$resultSet = mysqli_query($con, $sqlQuery) or die("database error:". mysqli_error($con));
		?>
		<table id="editableTable" class="table table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
                    <th>EmissionDate</th>
					<th>Request Text</th>
					<th>RequestReply</th>
                    <th>RequestStatus</th>	
                    <th>Edit</th>												
				</tr>
			</thead>
			<tbody>
				<?php while( $requests = mysqli_fetch_assoc($resultSet) ) { ?>
				   <tr id="<?php echo $requests ['id']; ?>">
				   <td><?php echo $requests ['id']; ?></td>
				   <td><?php echo $requests ['name']; ?></td>
                      <td><?php echo $requests ['EmissionDate']; ?></td>
				   <td><?php echo $requests ['text']; ?></td>
				   <td><?php echo $requests ['RequestReply']; ?></td>  				   				   				                   <td><?php echo $requests ['RequestStatus']; ?></td>
				   </tr>
				<?php } ?>
			</tbody>
		</table>	
  </div>
</div>
<script src="plugin/bootstable.js"></script>
<script src="js/editable.js"></script>







  