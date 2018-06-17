<?php include('header.php');


$users = $db->get ($db_table);
if ($db->count > 0)
    foreach ($users as $user) { 
        //print_r ($user);
	}

?>
<br><br>
<div class='col-12 box'>

	<h2>Full Data</h2>
	<table border='2' cellpadding='8px'>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Type</th>
			<th>Status</th>
			<th>Institute</th>
		</tr>
<?php 
		foreach ($users as $user) {
					echo "<tr> 
					<th><a href='id_card.php?id=" .$user['id']. "'>" .$user['id']. "</a></th>";
					echo "<td>" .$user['name']. "</td>";		
					echo "<td>" .$user['type']. "</td>";		
					echo "<td>" .$user['status']. "</td>";		
					echo "<td>" .$user['institute']. "</td>";		
					echo "</tr>";
			}

 ?>
	</table>

</div>
<br><br><br>
<?php include('footer.php'); ?>