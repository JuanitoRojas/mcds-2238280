function ejercicio3() {
    let aleatorio = Math.round(Math.random()*10);
    var numero1=8;
    var numero2=6;
    var multiplicacion=numero1*numero2;
    var resta=numero1-numero2;
    
if (aleatorio=>5) {
    console.log(
        
        '\n',
        'El número aleatorio es : ', aleatorio ,
        '\n',
        'El primer número es : ', numero1 ,
        '\n',
        'El segundo número es : ', numero2 ,
        '\n',
        'La multiplicación es igual a :', multiplicacion
    );
    aleatorio= aleatorio;
    document.getElementById('ejercicio3').innerHTML =multiplicacion;

} else {
    console.log(
        
        '\n',
        'El número aleatorio es : ', aleatorio ,
        '\n',
        'El primer número es : ', numero1 ,
        '\n',
        'El segundo número es : ', numero2 ,
        '\n',
        'La resta es igual a :', resta
    );
    aleatorio= aleatorio;
    document.getElementById('ejercicio3').innerHTML =resta;
    
}
}