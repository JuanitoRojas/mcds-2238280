function ejercicio1() {
    let aleatorio = Math.round(Math.random()*10);
    var numAleatorio= aleatorio;
    var numFijo= 5;
    console.log(
        '\n',
        'El número aleatorio es',numAleatorio,
        '\n',
        'El número fijo es',numFijo,
        '\n',
        'la resta entre los dos números es igual a :',numAleatorio-numFijo
 
        );
    aleatorio= aleatorio;
    document.getElementById('ejercicio1').innerHTML =numAleatorio-numFijo;
}