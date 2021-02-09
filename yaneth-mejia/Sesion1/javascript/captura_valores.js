function capturaValores() {
    const nombreUser = document.getElementById("user_name").value;
    const lastname = document.getElementById("lastname").value;
    const lastname1 = document.getElementById("lastname1").value;
    const age = document.getElementById("user_age").value;
    const emailUser = document.getElementById("email_user").value;   
    /* innetHTML:
        <h1></h1>
        <label></label>
        <p></p>
        <output></output>
    */
    document.getElementById("s1").innerHTML = `Ha iniciado sesion como ${nombreUser} ${lastname} ${lastname1}`;
    document.getElementById("s2").innerHTML = `Edad del usuario ${age} años`;
    document.getElementById("s3").innerHTML = `Ha recibido un correo de bienvenida ${emailUser}`;
    console.log(nombreUser);
}