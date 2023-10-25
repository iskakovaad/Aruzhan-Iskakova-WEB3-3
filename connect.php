<?php
    $connect = mysqli_connect('localhost', 'root','','coursework');
    

    if (!$connect){
        die ("Database connect error");
    }
?>