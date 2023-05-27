<?php
$host = "localhost"; // Nombre del host
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "amors_database"; // Nombre de la base de datos
// Codigo para validaciones - insertar
$conexion = mysqli_connect ($host, $username, $password, $database)
    or die ("No se puede Realizar operación");
    echo("por aca4");
$query = "SELECT * FROM usuarios WHERE usuario = '$username' AND contrasena = '$password'";
$resultado = mysqli_query($conexion, $query);
if (mysqli_num_rows($resultado) > 0) {
    $response = array("success" => true);
    echo("por aca 2");
} else {
    $response = array("success" => false);
    echo("por aca3");
}
echo("por aca");
mysqli_close($conexion);
header("Content-Type: application/json");
echo json_encode($response);
?>
