function mostrarTiempo() {
var fecha = new Date();
var dia = fecha.getDate();
var mes = fecha.getMonth() + 1;
var año = fecha.getFullYear();
var hora = fecha.getHours();
var minutos = fecha.getMinutes();
var segundos = fecha.getSeconds();
document.getElementById("tiempo").innerHTML = dia + "/" + mes + "/" + año + " " + hora + ":" + minutos + ":" + segundos;
setTimeout("mostrarTiempo()", 1000);
}