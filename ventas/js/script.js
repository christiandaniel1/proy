

/* Diferentes formas de usar una funcion ec 5 y ec 6 : */

function ventas() {
  var titulo = "mis ventas";
  return titulo;
}
console.log(ventas());

console.log("------------------otra forma: ");

var ventas = function () {
  var titulo = "mis ventas 2";
  return titulo;
}
console.log(ventas());

console.log("------------------otra forma con ec 6:");

const ventas1 = () => {
  var titulo = "mis ventas 2";
  return titulo;
}
console.log(ventas1());

console.log("----------------------con parametros");

function compras(producto) {
  var respuesta2 = "miproduto de compra es " + producto;
  return respuesta2;
}

var elproducto = "pinturas";
console.log(compras(elproducto));

console.log("----------------------con parametros y ec6");

const compras2 = (producto) => {
  var larespuesta = "miproduto de compra es " + producto;
  return larespuesta;
}
//solo si tiene un parámetro podemos quitar los paréntesis.
