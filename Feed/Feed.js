var usuarios = [];
var indiceActual = 0; 

function cargarUsuarios() {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'obtener_usuarios.php', true);

  xhr.onload = function() {
    if (xhr.status === 200) {
      usuarios = JSON.parse(xhr.responseText);
      mostrarUsuarios();
    }
  };

  xhr.send();
}
function mostrarUsuarios() {
  var fpizqElement = document.getElementById('fpizq');
  var fpcentElement = document.getElementById('fpcent');
  var fpderElement = document.getElementById('fpder');
  var infUSRElement = document.getElementById('infUSR');
  if (usuarios.length >= 3) {
    var indiceIzq = indiceActual % usuarios.length;
    var indiceCent = (indiceActual + 1) % usuarios.length;
    var indiceDer = (indiceActual + 2) % usuarios.length;
    fpizqElement.src = 'data:image/jpeg;base64,' + usuarios[indiceIzq].foto;
    fpcentElement.src = 'data:image/jpeg;base64,' + usuarios[indiceCent].foto;
    fpderElement.src = 'data:image/jpeg;base64,' + usuarios[indiceDer].foto;

    infUSRElement.innerHTML =
      usuarios[indiceCent].nombre +
      ' y ' +
      usuarios[indiceCent].edad +
      '<br>' +
      usuarios[indiceCent].intereses;
  }
}
function siguienteTurno() {
  indiceActual++;
  mostrarUsuarios();
}

function anteriorTurno() {
  if (indiceActual === 0) {
    indiceActual = usuarios.length - 1;
  } else {
    indiceActual--;
  }
  mostrarUsuarios();
}

window.onload = cargarUsuarios;
