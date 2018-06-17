<?php include('header.php'); ?>

<div class="col-12">
<div style="font-family: Kalpurush; font-size: 30px;" >


<?php 
if (!isset($_GET['id'])) {
	echo "<div class='container'>
	<div class='row'>
		<div class='col-4 box'>
			<form>
				<input class='form-control' type='text' name='id' placeholder='ID' autofocus>
				<button class='btn btn-primary' type='submit' name='submit'>Submit</button>
			</form>
		</div>
	</div>
</div>
</div>";
}
if (isset($_GET['id'])) {
		$id = $_GET['id'];
			// echo out the contents of each row into a table

		echo "<div class='row text-black'>
						<table border='1' cellpadding='10' align='center' style='color: #000'>
							<tr>
								<td style='color: #000'><center><img src='assets/img/logo.jpg' height='100' width='150'><br><b>The Rocking Rock<br>Event 2k18<br></b><i>Entry Pass</i></center></td>
							</tr>
							<tr>
								<td><center><img src='https://www.barcodesinc.com/generator/image.php?code=" .$id. "&style=197&type=C128B&width=150&height=50&xres=1&font=3' height='' width='300'></center></td>
							</tr>
						</table>
				</div>
				</div></div>";
		}	


include('footer.php');
?>
