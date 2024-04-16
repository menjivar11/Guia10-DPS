<?php
Header('Access-Control-Allow-Origin:*');
if($_GET)
{ $comando=$_GET['comando'];
$servername = "localhost";
$username = "id22051195_mb180762"; // Cambiar al nuevo nombre de usuario
$password = "Udb1234*"; // Cambiar a la nueva contraseña
$dbname = "id22051195_guia10dps";//Cambiar al nombre de base de datos
// Crear la conexión
$conn = new mysqli($servername, $username, $password,
$dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if($comando=='autenticar')
{ $usuario=$_GET["usuario"];
$contrasena=$_GET["contrasena"];
$sql = "Select * from usuarios where usuario='$usuario' and
contrasena='$contrasena'";
$result=$conn->query($sql);
if($result->num_rows>0){
echo'{"encontrado":"si"}';
}else{
    echo'{"encontrado":"no"}';
    }
    }
    $conn->close();
    }
    ?>