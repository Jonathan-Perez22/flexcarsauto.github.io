<?php  
 $conexion = new mysqli("localhost","root","","clientesflex");

 if($conexion ->connect_error){
    echo "Nuestro sitio experimenta fallos ...:(";
    exit();
 }
?>