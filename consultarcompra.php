<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://kit.fontawesome.com/9aa60c385f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/Chevrolet-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="stilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar mis Compras | Flexcar</title>
</head>
<body>
    <style>
        *{box-sizing:border-box;}
        
       
    </style>
     <header class="principal">
        <div class="contenedor">
            <div class="logo">
                <a href="index.html">
                    <img src="images/Chevrolet-logo.png" alt="logo-conce">
                    <a>Flexcar <br> Chevrolet</a> 
                </a>                
            </div>
            <div class="redes">
                <a href="https://www.instagram.com/flexcar.autosche/" target="_blank"><i class="fa-brands fa-instagram" style="color: #e52454;"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook" style="color: #095ef1;"></i></a>
            </div>
        </div>
        <nav >

          <ul id="menu">
              <li class="se-desplega"><a href="#" class="nav-link">Vehiculos</a>
              <ul class="menuD">
                  <li class="autos"><a href="autos.html" class="nav-link">Autos</a></li>
                  <li class="pick-ups"><a href="#" class="nav-link">Pick Ups</a></li>
                  <li class="suvs"><a href="#" class="nav-link">Suvs</a></li>
                  <li><a href="#" class="nav-link">Todos los Modelos</a>
              </ul>
          </li>
              <li><a href="index.html" class="nav-link">Plan de Pago</a></li>
              <li><a href="#" class="nav-link">Financiación</a></li>
              <li><a href="iniciarcompra.php" class="nav-link">Iniciar Compra YA!</a></li>
              <li><a href="consultarcompra.php" class="nav-link">Consultar Mis Compras</a></li>
              <li><a href="#" class="nav-link">Contactanos</a></li>
              <li class="se-desplega"><a href="" class="nav-link">¿Quiénes Somos?</a>
              <ul class="menuD">
                  <li><a href="#" class="nav-link">¿Quienes Somos?</a></li>
                  <li><a href="#" class="nav-link">Donde Estamos</a></li>
                  <li><a href="#" class="nav-link">Contactanos</a>
              </ul>
              </li>
          </ul>
      </nav>
    </header>
    <form action="consultarcompra.php" method="POST" name="Alta">
        <fieldset>
                    <label for="">Ingresar DNI</label>
                    <input type="text" name="DNI" id="" placeholder="Ingrese su N° de DNI...">
            
        <input type="submit" value="Enviar" class="btn" name="btn1">
        </fieldset>
    </form>
</body>
</html>
<?php
$tabla = "clientes";
if(isset($_POST['btn1'])){
    include("abrir_conexion.php");
    
    $resultado = mysqli_query($conexion,"SELECT * FROM $tabla WHERE NDoc = '$_POST[DNI]'");
    while($consulta = mysqli_fetch_array($resultado)){
        echo "
        <table width=\"100%\" border=\"1\">
        <tr>
            <td><b><center>Nombre</center></b></td>
            <td><b><center>Apellido</center></b></td>
            <td><b><center>DNI</center></b></td>
            <td><b><center>Vahiculo</center></b></td>
            <td><b><center>Plan De Pago</center></b></td>
        </tr>
        <tr>
            <td>".$consulta['Nombre']."</td>
            <td>".$consulta['Apellido']."</td>
            <td>".$consulta['NDoc']."</td>
            <td>".$consulta['Vehiculo']."</td>
            <td>".$consulta['PlanPago']."</td>
        </tr>
    </table>
        ";
    }
    include("cerrar_conexion.php");
}
?>