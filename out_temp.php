<?php include('header.php'); ?>
                    <div class="box col-5 text-white bg-secondary">
                        <!--In-->
                        <form class="form-group" action="" method="post">
                            <h3>Check out Temp:</h3>
                            <input class="form-control" type="text" name="youth_id" placeholder="Select here to check out" autofocus>
                        </form>
                    </div>
					<!--Output area-->
					<div class="col-5 box">
					<h3 class="alert">Result:</h3>
					<?php 

						if(isset($_POST['youth_id'])) {
							$youth_id	=	$_POST['youth_id'];

							$data = Array (
								'status' => 'Out Temp',
							);
							$db->where ('id', $youth_id);
							if ($db->update ($db_table, $data)) {
								if($db->count == 0) {
									$color = "danger";
								} else {
									$color = "success";
								}
								
								echo '<div class="alert alert-dismissible alert-' . $color . '" role="alert">
								<button type="button" class="close" data-dismiss="alert">&times;</button>' .
								$db->count . ' Record Updated!
								</div>';

								$db->where ('id', $youth_id);
								$user = $db->getOne ($db_table);

								echo '<div class="alert alert-dismissible alert-success" role="alert">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								ID no: ' . $user['id'] . '<br>
								Name: ' . $user['name'] . '<br>
								Type: ' . $user['type'] . '<br>
								Institute: ' . $user['institute'] . '<br>
								</div>';
}
							else
								echo 'update failed: ' . $db->getLastError();
}

					?>
					</div>
<?php include('footer.php'); ?>