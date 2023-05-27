<?php
$usuario = $_GET['username'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "amors_database";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
$sql = "SELECT fotoPerfil, nombre, edad, intereses FROM usuarios WHERE usuario = '$usuario'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();

    echo "<script>document.getElementById('fpp').src = 'data:image/jpeg;base64," . base64_encode($fila['foto_perfil']) . "';</script>";

    echo "<script>document.getElementById('NPRF').innerHTML = '" . $fila['nombre'] . "';</script>";
    echo "<script>document.getElementById('infUSR').innerHTML = '" . $fila['nombre'] . " y " . $fila['edad'] . "<br>" . $fila['intereses'] . "';</script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Feed.css">
    </head>
    <body>
        <div class="contenedor">
            <div class="lateral_USR">
                <div class ="PUSR">
                    <img src="../Imagenes/Perfil_Defecto.jpg" id="fpp" alt="Foto_De_Perfil">
                    <p id="NPRF">Nombre de usuario</p>
                </div>
                <div class = "CTBTN">
                    <div class = "Chats">
                        <div class="chats"></div>
                    </div>
                    <div class = "CerrarS">
                        <input type="button" id="CerrarSesion" value="Cerrar sesion">
                    </div>
                </div>
            </div>
            <div class="Feed_Citas">
                <div class="Feed80">
                    <div class="IMGIzq">
                        <img src="../Imagenes/Perfil_Defecto.jpg" id="fpizq" alt="Foto_De_Perfil1">
                    </div>
                    <div class="IMGCent">
                        <div class="BReg">
                            <button id="anterior" class="boton">&#8617;</button>
                        </div>
                        <div class="IM">
                            <div class="IMAG">
                                <img src="../Imagenes/Perfil_Defecto.jpg" id="fpcent" alt="Foto_De_Perfil2">
                            </div>
                            <div class="INFR">
                                <p id="infUSR">Nombre de usuario y edad<br>Gustos<br>Informacion relevante</p>
                            </div>
                        </div>
                        <div class="BSig">
                            <button id="siguiente" class="boton">&#8618;</button>
                        </div>
                    </div>
                    <div class="IMGDer">
                        <img src="../Imagenes/Perfil_Defecto.jpg" id="fpder" alt="Foto_De_Perfil3">
                    </div>
                </div>
                <div class ="Feed20">
                    <div class="DescartarB">
                        <button id="descartar" class="boton-redondo">&#128078;</button>
                    </div>
                    <div class="InfoB">
                        <button id="info" class="boton-redondo">i</button>
                    </div>
                    <div class="MatchB">
                        <button id="match" class="boton-redondo">&#10084;</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="Feed.js"></script>
    </body>
</html>
