<?php

    $host = "localhost";
    $User = "stullerm_acanche";
    $pass = "*47*Alamilla";

    $db = "stullerm_calidad";

    $conn = mysqli_connect($host, $User , $pass, $db);

    //if (!$conn) { 
        //die("Conexión fallida: " . mysqli_connect_error()); 
    //}else{
       // echo"exito toltal";
    //}

    if (!$conn) {
        echo "Conexion fallida";
       }