<?php 

include('header.php'); 

if(isset($_POST['youth_id'])) {
	$youth_id	=	$_POST['youth_id'];
	$in_out_type	= $_POST['in_out_type'];	
	// Create connection
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "UPDATE ioms SET status='$in_out_type' WHERE id='$youth_id'";

	if (mysqli_query($conn, $sql)) {
		echo '                    <div class="alert alert-dismissible alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	Record Updated!
</div>';
	
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
	
	
	mysqli_close($conn);
}

?>
                    <div class="box card text-white bg-secondary">
                        <!--In-->
                        <form class="form-group" action="" method="post">
                            <h3>Check out PERM:</h3>
                            <input type="hidden" name="in_out_type" value="Out Perm">
                            <input class="form-control" type="text" name="youth_id" placeholder="Select here to check out" autofocus>
                        </form>
                    </div>
<?php include('footer.php'); ?>