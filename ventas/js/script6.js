https://davidinformatico.com/novedades-de-ecmascript/


const myFunc = function() {
  const myVar = "value";
  return myVar;
}

const myFunc = (str) => {
  const myVar = str + "value";
  return myVar;
}

//solo si tiene un parámetro podemos quitar los paréntesis.
const myFunc = str => {
  const myVar = str + "value";
  return myVar;
}

const myFunc = () => "value"
--------
Uso de arrow functions en Filter, Map, Reduce  :

var words = ['spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];
const result = words.filter(word => word.length > 6);
console.log(result);
// salida: Array ["exuberant", "destruction", "present"]
---------

var numeros = [1, 5, 10, 15];
var dobles= numeros.map(function(x) {
   return x * 2;
});
// el array dobles tiene ahora: [2, 10, 20, 30]
------
const array1 = [1, 2, 3, 4];
const reducer = (valorAnterior, valorActual) => valorAnterior + valorActual;
console.log(array1.reduce(reducer));
// salida: 10
-----------
var almuerzos=[{principal:'arepa',postre:'helado'},{principal:'pizza',postre:'helado'},{principal:'arepa',postre:'helado'}]
var cantidadArepa=almuerzos.reduce(function(contador,almuerzo)
{
if(almuerzo.principal === 'arepa'){
return contador +1;
}else{
return contador;
}
} ,0)

console.log(cantidadArepa)
--------

const arr = [6, 89, 3, 45];
const maximus = Math.max(...arr); 
console.log(maximus)  =  89

--------

var objeto = {prop1: 3.6, prop2: 7.4, prop3: 6.54 };
const { prop1, prop2, prop3 } = objeto ; 
// tendremos las variables prop1, prop2 y prop3 con sus valores correspondientes.

Podemos poner otros nombres de variable diferentes al de las propiedades:
const { prop1:var1, prop2:var2} = objeto ; 

-----

const person = {
  name: "Zodiac Hasbro",
  age: 56
};
const greeting = `Hello, my name is ${person.name}!
I am ${person.age} years old.`;

-----
var sumar = function(a,b){
   return a+b
}

------