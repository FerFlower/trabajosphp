<?php
$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="matricula";

try {

    $conexion = new PDO("mysql:host=$servidor; dbname=$bd", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexion Establecida";
    
    } catch ( PDOException $error) {
     echo "Conexion Erronea".$error;
     die('Error: ' . $error->GetMessage());
     }finally{
     $conexion = null;
    
    }
    
    
    
    
    ?>