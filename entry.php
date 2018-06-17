<?php include('header.php') ?>
<?php 
error_reporting(0);
if(isset($_POST['name']) & $_POST['name'] == NULL) {
	echo '                    <div class="alert alert-dismissible alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
Something went wrong! <strong>Entry NOT added!</strong>
</div>';
}

if(isset($_POST['id']) & $_POST['id'] == NULL & $_POST['name'] == !NULL) {
	echo '                    <div class="alert alert-dismissible alert-warning" role="alert">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
ID not defined. Will be set automatically. 
</div>';
}


if (isset($_POST['name']) & $_POST['name'] == !NULL) {

	$id 		=	$_POST['id'];
	$name 		=	$_POST['name'];
	$type 		=	$_POST['type'];
	$institute 	=	$_POST['institute'];

	$connect	=	mysql_connect($host, $user, $pass) or die(mysql_error());
		mysql_select_db($db) or die(mysql_error());

		mysql_query("INSERT INTO `pb`.`ioms` (`id`, `type`, `status`, `name`, `institute`) VALUES ('$id', '$type', 'registered', '$name', '$institute')")

		or die(mysql_error());

		echo '                    <div class="alert alert-dismissible alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	Entry Added!
</div>';
}
		?>
		<div class="box col-4">
			<form method="post">
				<input class="form-control" type="text" name="id" placeholder="ID" autofocus><br>
				<input class="form-control" type="text" name="name" placeholder="Name"><br>
				<input class="form-control" type="text" name="type" placeholder="Type"><br>
				<input class="form-control" type="text" name="institute" placeholder="Institute"><br>
				<button class="btn btn-primary" type="submit">Submit</button>
			</form>
		</div>





<?php include('footer.php') ?>