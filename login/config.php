<?php

$conn=new mysqli("localhost","root","password","prueba");

if ($conn->connect_error){
    die('Error de conexion'.$conn->connect_error);
}