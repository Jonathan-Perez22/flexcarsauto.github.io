<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://kit.fontawesome.com/9aa60c385f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/Chevrolet-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="stilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Compra | Flexcar</title>
</head>
<body>
    <style>
        fieldset{
            display: flex;flex-direction: column;
        }
        fieldset .contenedor{
            height:60vh;width:60vw;
            margin: 0 auto;
            display: flex;flex-direction: row;
        }

       fieldset .label,.input{
        height: 100%;width: 50%;
        display: flex;justify-content: space-evenly;
        flex-direction: column;
       }
       fieldset .label label{
        font-size: 1.3em;font-weight: bold ;
        font-family: sans-serif;
       }
       fieldset .input input,select{
        height: 6vh; width: 100%;
        border-radius: 20px;
       }
       fieldset .btn{
        width: 10vw;height: 5vh;
        margin: 0 auto;  margin-top: 5vh;
        border-radius: 5vh;letter-spacing: 1px;
       }
       fieldset .btn:hover{
        letter-spacing: 2px;width: 11vw;height: 6vh;
        background-color: rgba(10, 10, 10, .8);color: azure;
       }
    </style>
     <header class="principal">
        <div class="contenedor">
            <div class="logo">
                <img src="images/Chevrolet-logo.png" alt="logo-conce">
                <a>Flexcar <br> Chevrolet</a> 
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
              <li><a href="#plan-pago" class="nav-link">Plan de Pago</a></li>
              <li><a href="#" class="nav-link">Financiación</a></li>
              <li><a href="iniciarcompra.php" class="nav-link">Iniciar Compra YA!</a></li>
              <li><a href="consultarcompra.php" class="nav-link">Consultar Mis Compras</a></li>
              <li><a href="#contactanos" class="nav-link">Contactanos</a></li>
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
    <form action="iniciarcompra.php" method="POST" name="Alta">
        <fieldset>
            <div class="contenedor">

                <div class="label">
                    <label for="">Nombre</label>
                    <label for="">Apellido</label>
                    <label for="">Tipo de Doc.</label>
                    <label for="">Nro. de Doc.</label>
                    <label for="">Direccion</label>
                    <label for="">Vehiculo</label>
                    <label for="">Plan de Pago</label>
                </div>
                <div class="input">
                    
                    <input type="text"  placeholder="Ingrese Su Nombre/s" name="nombre">
                    <input type="text"  placeholder="Ingrese Su Apellido/s" name="apellido">
                    <select  placeholder="Ingrese Su Tipo de Doc." name="tdoc">
                        <option value="">Seleccione una opcion</option>
                        <option value="Identificacion Nacional">Identificacion Nacional</option>
                        <option value="DNI">DNI</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                    <input type="text"  placeholder="Ingrese Su N° de Doc." name="ndoc">
                    <input type="text"  placeholder="Ingrese Su Direccion" name="direccion">
                    <input type="text"  placeholder="Ingrese El Vehiculo que Quiere Comprar" name="vehiculo">
                    <select name="plandepago">
                        <option value="">Seleccnes un plan de pago</option>
                        <option value="12 cuotas">12 Cuotas</option>
                        <option value="24 cuotas">24 cuotas</option>
                        <option value="36 cuotas">36 cuotas</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="Enviar" class="btn" name="btn1">
            </fieldset>
    </form>
</body>
</html>


<!-- $servername = "localhost";
$database = "clientesflex";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn); -->

<?php
if(isset($_POST['btn1'])){
include("abrir_conexion.php");
 mysqli_query($conexion, "INSERT INTO clientes(Nombre, Apellido, TipoDoc, NDoc, Localidad, Vehiculo, PlanPago) VALUES ('$_POST[nombre]','$_POST[apellido]',
 '$_POST[tdoc]','$_POST[ndoc]','$_POST[direccion]','$_POST[vehiculo]','$_POST[plandepago]')") or die ("Problemas en el select" . mysqli_error($conexion));
 echo "Compra exitosa!";
 include("cerrar_conexion.php");}
 ?>