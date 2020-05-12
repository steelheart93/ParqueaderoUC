var canvas = document.getElementById("canvas");
var contexto = canvas.getContext("2d");

var llegada = false;
var salida = false;
var coche = {url: "img/coche.png", cargaOK: false};

var arreglo = [];

coche.imagen = new Image();
coche.imagen.src = coche.url;
coche.imagen.addEventListener("load", cargarCoche);

function cargarCoche() {
  coche.cargaOK = true;
  dibujar();
}

function dibujar(){
  if(coche.cargaOK){
    for (coordenada of arreglo) {
      contexto.drawImage(coche.imagen, coordenada.x, coordenada.y);
    }
  }
  if(llegada) {
    contexto.drawImage(coche.imagen, 660, 390);
  } else {
    contexto.clearRect(660, 390, 100, 100);
  }
  if(salida) {
    salida = false;
    if(arreglo.length > 0) {
      var objeto = arreglo.pop();
      contexto.clearRect(objeto.x, objeto.y, 100, 100);
    } else {
      alert("Parqueadero vacío, espera a que alguien ingrese.")
    }
  }
}

function Coordenada(x, y) {
    this.x = x;
    this.y = y;
}

$("#llegada").click(function() {
  if(llegada == false){
    llegada = true;
  } else {
    alert("Debe ingresar el que llego primero.");
  }
  dibujar();
});
$("#ingreso").click(function() {
  if(llegada == true) {
    llegada = false;
    if(arreglo.length == 0){
      arreglo.push(new Coordenada(10, 240));
    }
    else if(arreglo.length < 5){
      arreglo.push(new Coordenada(arreglo[arreglo.length - 1].x + 130, 240));
    }
    else if(arreglo.length == 5){
      arreglo.push(new Coordenada(10, 390));
    }
    else if(arreglo.length < 10){
      arreglo.push(new Coordenada(arreglo[arreglo.length - 1].x + 130, 390));
    } else {
      alert("Parqueadero lleno, espera a que alguien salga.");
    }
  } else {
    alert("Debe llegar algún vehiculo.");
  }
  dibujar();
});

$("#salida").click(function() {
  salida = true;
  dibujar();
});

$("#enviar").click(function() {
  var cadena = "";
  var espacios = [];

  for (var i = 0; i < 10; i++) {
    espacios[i] = "DISPONIBLE";
  }
  for (var i = 0; i < arreglo.length; i++) {
    espacios[i] = "OCUPADO";
  }

  for (var i = 0; i < 10; i++) {
    cadena += "<input type=\"text\" name=\"info" + i + "\" value=\"Espacio 0" + i + ": " + espacios[i] + "\">";
  }

  document.getElementById("formulario").innerHTML = cadena;
  document.getElementById("formulario").submit();
});
