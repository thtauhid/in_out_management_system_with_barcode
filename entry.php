<?php include('header.php'); ?>
		<div class="box col-5">
			<form method="post">
				<input class="form-control" type="text" name="id" placeholder="ID" autofocus><br>
				<input class="form-control" type="text" name="name" placeholder="Name"><br>
				<input class="form-control" type="text" name="type" placeholder="Type"><br>
				<input class="form-control" type="text" name="institute" placeholder="Institute"><br>
				<button class="btn btn-primary" type="submit">Submit</button>
			</form>
		</div>
		<div class="col-5 box">
		<h3 class="alert">Result:</h3>
<?php 
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

		//New Updated
		$data = Array ("id" => $id,
		"type" => $type,
		"status" => 'registered',
		"name" => $name,
		"institute" => $institute
		);
		$id = $db->insert ($db_table, $data);
		if($id) {
		echo '<div class="alert alert-dismissible alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	Entry Added!
</div>';

echo '<div class="alert alert-dismissible alert-success" role="alert">
<button type="button" class="close" data-dismiss="alert">&times;</button>
ID no: ' . $id . '<br>
Name: ' . $name . '<br>
Type: ' . $type . '<br>
Institute: ' . $institute . '<br>
</div>';

	}

} ?>
		</div>

<?php include('footer.php') ?>