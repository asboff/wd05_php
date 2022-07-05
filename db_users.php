<?php

    $connection = mysqli_connect ('mysql', 'root', 'root', 'wd05');
    if (!$connection){
        echo "Error:". mysqli_error();
    }