<?php

    $database= new mysqli("localhost","root","","gav");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>