<?php

$conn= mysqli_connect("localhost","root","","formulaire_db");

        if (mysqli_connect_errno()) {
            die("connection error". mysqli_connect_error());
        }

?>