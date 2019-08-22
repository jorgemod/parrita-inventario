//Regresión Lineal
function reg_lig(xarray,yarray){
var
      x = y = xy = xx = a = b = resultado = 0,
      cantidad = xarray.length,
      futuro = 100;

for (i = 0; i < cantidad; i++) {
      x += xarray[i];
      y += yarray[i];
      xy += xarray[i]*yarray[i];
      xx += xarray[i]*xarray[i];
}

b = ((cantidad * xy) - (x * y)) / ((cantidad * xx) - (x * x));

a = (y - (b * x)) / cantidad;

if(b != 0) {


} else {
      console.log(' Infinito');
	}
	var a_b= new Array(a,b);
	return a_b;
}
var   xarray = [1, 2, 3, 4, 5], yarray = [ 5, 5, 5, 6.8, 9 ];

console.log("Valor de a y b " + reg_lig(xarray,yarray));



//Generar un ID
function numero_aleatorio(){
	var numero_id = Math.round(Math.random() * (10000-1));
	return numero_id;
}

console.log("Numero ID Aleatorio: " + numero_aleatorio(xarray,yarray));



//Genera letra aleatoria
function makeid(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}
//Crear Nombre del Producto
function nombre_aleatorio(){
	var numero = Math.round(Math.random() * (500-1));
	return makeid(1).concat(numero);
}
console.log("Nombre Aleatorio: " + nombre_aleatorio());


//Fecha Aleatoria
function fecha_aleatoria(){
var a = Date.parse("2014");
var b = Date.parse("2020");
var fechaRandom = new Date(a + Math.random() * (b - a));
return fechaRandom.getFullYear() +"-" + (fechaRandom.getMonth() + 1) + "-" + fechaRandom.getUTCDate();
}
console.log("Fecha Aleatoria : " + fecha_aleatoria());
