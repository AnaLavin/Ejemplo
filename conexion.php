
<?php

try{
    $conexion = new PDO('mysql:host=localhost; dbname=escuela', 'root', '1234');
    echo 'conexion realizada con exito';
}catch(Exception $e){
    echo 'Error al conectar la base de datos' .$e;
} 

?>


