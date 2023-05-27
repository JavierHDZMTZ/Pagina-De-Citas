// Redireccionado a pagina inicial al dar click en el logo
document.getElementById("logo").addEventListener("click", function() {
    window.location.href = "Inicio.html";
  });
//Redireccion a la pagina de inicio de sesion
document.getElementById("InicioSesion").addEventListener("click", function() {
    window.location.href = "../Inicio de Sesion/InicioSesion.html";
});
//Redireccion a la pagina de registro
document.getElementById("Registrarse").addEventListener("click", function() {
    window.location.href = "../Registro/Registro.html";
});
//Redireccion a la pagina de informacion sobre nosotros
document.getElementById("enlace").addEventListener("click", function() {
    window.location.href ="../Mas Informacion/Masinformacion.html";
});