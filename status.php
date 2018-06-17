<?php 

include('header.php');

$dataset_1 = $db->rawQuery('SELECT status, count(*) FROM ' . $db_table . ' GROUP by status ORDER BY status');
$dataset_2 = $db->rawQuery('SELECT type, count(*) FROM ' . $db_table . ' GROUP by type ORDER BY type');
$dataset_3 = $db->rawQuery('SELECT institute, count(*) FROM ' . $db_table . ' GROUP by institute ORDER BY institute');

?>


<div class="col-12 box">
	<div class="row">

	<div class="col-3">
			<table border='2' cellpadding='8px'>
			<legend>By status:</legend>
			<?php 
					foreach ($dataset_1 as $single_data) {
								echo "<tr> 
								<th>" .$single_data['status']. "</th>";
								echo "<td>" .$single_data['count(*)']. "</td>		
								</tr>";
						}

			?>
			</table>
			
		</div>
		<div class="col-3">
			<table border='2' cellpadding='8px'>
			<legend>By Type:</legend>
			<?php 
					foreach ($dataset_2 as $single_data) {
								echo "<tr> 
								<th>" .$single_data['type']. "</th>";
								echo "<td>" .$single_data['count(*)']. "</td>		
								</tr>";
						}

			?>
			</table>
		</div>
		<div class="col-6">
			<table border='2' cellpadding='8px'>
			<legend>By Institution:</legend>
			<?php 
					foreach ($dataset_3 as $single_data) {
								echo "<tr> 
								<th>" .$single_data['institute']. "</th>";
								echo "<td>" .$single_data['count(*)']. "</td>		
								</tr>";
						}

			?>
			</table>
		</div>

	<div class="alert alert-info box">
		<?php $count = $db->getValue ($db_table, "count(*)"); echo "Total Registered: <strong>{$count}</strong>"; ?>
	</div>
	</div>
</div>


<?php include('footer.php'); ?>