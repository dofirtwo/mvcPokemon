function create(){
    let data = `txtRol=${document.getElementById("txtRol").value}`;
    let option = {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: data,
    }
    let url = "../Controller/roles.create.php"
    fetch(url, option)
    .then((response)=> response.json())
    .then((data) => {
        console.log(data);
    })
}

function read(){}

function updatte(){}

function deletes(){}