function login(){
    let url = "../Controller/login.php";
    let data = `correo=${txtCorreo.value}&password=${txtPassword.value}`
    const options = {
        method: "GET",
        body: data,
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
    }
    fetch(url, options)
    .then((response) => response.json())
    .then((data) => {
        console.log(data)
    })
}