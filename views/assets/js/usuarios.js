function readRol(){
    let url = "../Controller/roles.read.php"
    fetch(url)
    .then((response) => response.json())
    .then((data) => {
        console.log(data)
        let opciones = "<option selected disabled>Seleccionar</option>"
        data.forEach((element) => {
            opciones +=`<option value="${element.id}">${element.nombreRol}</option>`
        });       
        selRol.innerHTML = opciones
    });
}

function create(){
    let url = "../Controller/usuarios.create.php"
    let data = `tipoDoc=${selTipoDoc.value}&numero=${txtNumero.value}&nombre=${txtNombre.value}&apellido=${txtApellido.value}&correo=${txtCorreo.value}&password=${txtPassword.value}&direccion=${txtDireccion.value}&telefono=${txtTelefono.value}&genero=${selGenero.value}&rol=${selRol.value}`
    const options = {
        method: "POST",
        body: data,
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
    }
    fetch(url,options)
    .then((response) => response.json)
    .then((data) => {
        console.log(data)
    })
}

function read(){
    let url = "../Controller/usuarios.read.php"
    fetch(url)
    .then((response) => response.json)
    .then((data) => {
        console.log(data)
    })
}
read()
readRol()