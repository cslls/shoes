<?php

    $connection = mysqli_connect("localhost","root","root","shoes");

    if (!$connection){
        die(mysqli_error($connection));
    }

?>