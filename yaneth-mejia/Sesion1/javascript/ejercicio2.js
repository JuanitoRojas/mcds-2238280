
function ejercicio2() {
    let aleatorio = Math.round(Math.random()*10);
    var numAleatorio= aleatorio;
    var numFijo= 7;
    console.log(
        
        '\n',
        'El número aleatorio es',numAleatorio,
        '\n',
        'El número fijo es',numFijo,
        '\n',
        'la multiplicación entre los dos números es igual a :',numAleatorio-numFijo
    );
    aleatorio= aleatorio;
    document.getElementById('ejercicio2').innerHTML =numAleatorio*numFijo;
}