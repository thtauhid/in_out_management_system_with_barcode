<?php include('header.php'); ?>


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

		echo "<div class='row'>
						<table border='1' cellpadding='10' align='center'>
							<tr>
								<td><center><img src='assets/img/bdrcs.png' height='100' width='100'><br><b>বাংলাদেশ রেড ক্রিসেন্ট সোসাইটি <br> যুব রেড ক্রিসেন্ট, বগুড়া<br></b><i>বর্ষবরণ উৎসব ১৪২৫</i></center></td>
							</tr>
							<tr>
								<td><center><img src='https://www.barcodesinc.com/generator/image.php?code=" .$id. "&style=197&type=C128B&width=150&height=50&xres=1&font=3' height='' width='300'></center></td>
							</tr>
						</table>
				</div>
				</div>";
		}	


include('footer.php');
?>
