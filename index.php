<?php

if ( ! file_exists('config.php' ) ) {
    header('Location: configure.php');
} else {
    include('header.php');  ?>
        <div class="col-12">
        <h1 class='text-center'>IOMS - In Out Management System</h1><br>

        <h4 class="alert">About:</h4>
        <p class="alert alert-secondary box">
        This application was originally developed by Tasnimul Hasan Tauhid intented to make registration and guest management easier in events. <br>
        Was first used on 14 April, 2018 in Pahela Boisakh organised by Red Crescent Youth, Bogra. <br>
        Special thanks to Almahmudur Rahman (Youth Chief 2016-2018, Red Crescent Youth, Bogra) for encouraging me to develop this application. 
        </p>
        <br><hr><br>

        <h4 class="alert">Contact:</h4>
        <p class="alert alert-secondary box">
            In case you need any help please feel free to contact me. <br><br>

                <a href="https://web.facebook.com/tht52/"><button type="button" class="btn btn-outline-info" style="padding: 5px;"><i class="fab fa-facebook-square"  style="font-size: 35px"></i></button></a>

                <a href="https://github.com/thtauhid/"><button type="button" class="btn btn-outline-info" style="padding: 5px;"><i class="fab fa-github-square"  style="font-size: 35px"></i></button></a>


                <a href="mailto:thtauhid.71@gmail.com"><button type="button" class="btn btn-outline-info" style="padding: 5px;"><i class="fa fa-envelope-square"  style="font-size: 35px"></i></button></a>
        </p>

        <br><hr><br>
        <h4>Navigation:</h4>
                    <a href='index.php' ><button type="button" class='btn btn-outline-info'>Index</button></a>
                    <a href='in.php' ><button type="button" class='btn btn-outline-info'>In</button></a>
                    <a href='out_temp.php' ><button type="button" class='btn btn-outline-info'>Out Temp</button></a>
                    <a href='out_perm.php' ><button type="button" class='btn btn-outline-info'>Out Perm</button></a>
                    <a href='status.php' ><button type="button" class='btn btn-outline-info'>Status</button></a>
                    <a href='info.php' ><button type="button" class='btn btn-outline-info'>Info</button></a>
                    <a href='entry.php' ><button type="button" class='btn btn-outline-info'>Entry</button></a>
                    <a href='id_card.php' ><button type="button" class='btn btn-outline-info'>ID Card</button></a>

        </div>
<?php include('footer.php'); } ?>