<?php

    $connect = mysqli_connect('localhost','root','123456789','form');
    if (mysqli_connect_error($connect)) {
        echo 'Failed to connect';
    }

?>