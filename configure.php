<?php 
include('header.php'); 

if ( ! file_exists('config.php' ) ) {
    // file does not exist... 

    if(isset($_POST['config_table'])) {
        $config_host   =   $_POST['config_host'];
        $config_username   =   $_POST['config_username'];
        $config_password   =   $_POST['config_password'];
        $config_database   =   $_POST['config_database'];
        $config_table   =   $_POST['config_table'];
    
        $handle = fopen('config.php', 'w') or die('<div class="alert alert-danger">Unable to create/open config.php.</div>');
        $data = '<?php 

        //db_data
        $host	=	"' . $config_host . '";
        $user	=	"' . $config_username . '";
        $pass	=	"' . $config_password . '";
        $db 	=	"' . $config_database . '";
        $db_table 	=	"' . $config_table . '";
        
        ?>';
        fwrite($handle, $data);
        echo '<div class="alert alert-success">
        Successfully created config.php with given data. Please navigate to the <a href="index.php" class="alert-link">index</a> page. 
    </div>';
    include('footer.php');

    }

    if(!isset($_POST['config_table'])) {
    echo '    <div class="col-4 box">
    <div class="alert alert-success">
        Welcome to the config page.
    </div><hr>
        <form action="" method="post">
            <input name="config_host" class="form-control" type="text" placeholder="Host" autofocus><br>
            <input name="config_username" class="form-control" type="text" placeholder="Username"><br>
            <input name="config_password" class="form-control" type="text" placeholder="Password"><br>
            <input name="config_database" class="form-control" type="text" placeholder="Database"><br>
            <input name="config_table" class="form-control" type="text" placeholder="Table"><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>';

    }

} else {
	// file exists... 
	echo '<div class="alert alert-danger">
    config.php already exists. Please delete this file.
</div>';
include('footer.php');

}
?>
