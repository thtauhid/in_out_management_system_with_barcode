<?php 

include('header.php');

	//lets connect
	$connect	=	mysql_connect($host, $user, $pass) or die(mysql_error());
	mysql_select_db($db) or die(mysql_error());

	//echo "DB Connected!"
	;		

$result = mysql_query("SELECT status, count(*) FROM ioms GROUP by status ORDER BY status")

		or die(mysql_error());

$result2 = mysql_query("SELECT type, count(*) FROM ioms GROUP by type ORDER BY type")

		or die(mysql_error());


$result3 = mysql_query("SELECT institute, count(*) FROM ioms GROUP by institute ORDER BY institute")

		or die(mysql_error());

?>
<br><br>
<div class='container' style='border: 3px solid #000; padding: 15px;'>

	<h2>Present</h2>
	<table border='2' cellpadding='8px' >
<?php 
		while($row = mysql_fetch_array( $result )) {
					echo "<tr> 
					<th>" .$row[0]. "</th>";
					echo "<td>" .$row[1]. "</td>		
					</tr>";
			}

 ?>
	</table>
<br><hr><br>

<h2>Total Participate</h2>
	<table border='2' cellpadding='8px'>
<?php 
		while($row = mysql_fetch_array( $result2 )) {
					echo "<tr> 
					<th>" .$row[0]. "</th>";
					echo "<td>" .$row[1]. "</td>		
					</tr>";
			}

 ?>
	</table>
	<br><hr><br>
	<h2>By Institute</h2>
	<table border='2' cellpadding='8px'>
<?php 
		while($row = mysql_fetch_array( $result3 )) {
					echo "<tr> 
					<th>" .$row[0]. "</th>";
					echo "<td>" .$row[1]. "</td>		
					</tr>";
			}

 ?>
	</table>
</div><br><br><br>
<?php include('footer.php'); ?>