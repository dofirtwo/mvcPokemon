var id

function create(){
    let data = `txtRol=${document.getElementById("txtRol").value}`;
    let option = {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: data,
    }
    let url = "../Controller/roles.create.php";
    fetch(url, option)
    .then((response)=> response.json())
    .then((data) => {
        alertify.success(data)
        read();
    })
    .catch((e) => {
        alertify.error(e);
    })
}

function read(){
    let url = "../Controller/roles.read.php";
    fetch(url)
    .then((response)=> response.json())
    .then((data) => {
        let tabla = ""
        data.forEach((element,index) => {
            tabla += `<tr>`;
            tabla += `<th scope="row">${index + 1}</th>`;
            tabla += `<th>${element.nombreRol}</th>`;
            tabla += `<th><div class="form-check form-switch">
                            <input onclick="estadoRol('${element.estado}','${element.id}')" class="form-check-input" type="checkbox" role="switch" id="switch${element.nombreRol}">
                            <label class="form-check-label" for="flexSwitchCheckDefault">${element.estado == 'A'? 'ACTIVO':'INACTIVO'}</label>
                        </div>
                    </th>`;
            tabla += `<th>
                        <a onclick="estadoUpdate(${element.id})" class="btn" data-bs-toggle="modal" data-bs-target="#updateModal"><i class="fa-solid fa-pen fa-shake" style="color: #e7ca08;"></i></i></a> 
                        <a onclick="estadoDelete(${element.id},'${element.nombreRol}')" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-solid fa-trash fa-spin" style="color: #fa1900;"></i></a>
                    </th>`;
            tabla += `</tr>`;
        });
        document.getElementById("tableRol").innerHTML = tabla
        actualizarEstado();
        let table = new DataTable('#tabla',{
            language:{
                url:"./assets/es-ES.json",
            },
            dom: 'Bfrtip',
            buttons: [
                {
                    extend:"excel",
                    text:"<i class='fa-solid fa-file-excel' style='color: #25a734;'></i>",
                    titleAttr:"Excel",
                    className:"btn excelDataTable",
                    exportOptions:{
                        columns:[0,1,2],
                    },

                },
                {
                    extend:"pdf",
                    text:'<i class="fa-solid fa-file-pdf" style="color: #bf2308;"></i>',
                    titleAttr:"PDF",
                    exportOptions:{
                        columns:[0,1,2],
                    },
                    className:"btn pdfDataTable",
                    download: "open",
                },
                {
                    extend:"print",
                    text:'<i class="fa-solid fa-print" style="color: #0d49af;"></i>',
                    titleAttr:"Imprimir",
                    className:"btn printDataTable",
                    exportOptions:{
                        columns:[0,1,2],
                    },

                },
                {
                    extend:"copy",
                    text:'<i class="fa-solid fa-copy" style="color: #b90e9a;"></i>',
                    titleAttr:"Copiar",
                    className:"btn copyDataTable",
                    exportOptions:{
                        columns:[0,1,2],
                    },

                },
            ],
        });
    })    
}

function update(){
    let id  = localStorage.id;
    let nombreRol = document.getElementById("txtRolUpdate").value;
    let data = `txtRol=${nombreRol}&id=${id}`;
    const options = {
        method: "POST",
        body: data,
        headers:{
            "Content-Type": "application/x-www-form-urlencoded",
        },
    };
    let url = "../Controller/roles.update.php"
    fetch(url,options)
    .then((response) => response.json())
    .then((data) => {
        alertify.success(data)
        read();
    })
}

function deletes(){
    let url =`../Controller/roles.delete.php?`;
    const options = {
        method: "POST",
        body: `id=${this.id}`,
        headers:{
            "Content-Type": "application/x-www-form-urlencoded",
        },
    }
    fetch(url, options)
    .then((response) => response.json())
    .then((data) =>{
        alertify.success(data)
        read()
    });
}

read();

function estadoRol(estado,id){
    let data = `id=${id}&estado=${estado}`;

    let url = "../Controller/roles.estado.php";
    let option = {
        method: 'POST',
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: data,
    };
    fetch(url, option)
    .then((response)=> response.json())
    .then((data) => {
        alertify.success(data)
        read();
    })
}

function actualizarEstado(){
    const estados = document.getElementById("tableRol").getElementsByClassName("form-check-input");
    const labelEstado = document.getElementById("tableRol").getElementsByClassName("form-check-label");
    for (let i = 0; i < estados.length; i++) {
        if(labelEstado[i].innerHTML =="ACTIVO"){
            estados[i].setAttribute("checked","")
        }
    }
}

function estadoUpdate(id){
    let url =`../Controller/roles.readid.php?id=${id}`;
    fetch(url)
    .then((response) => response.json())
    .then((data) =>{
        document.getElementById("txtRolUpdate").value = data[0].nombreRol;
        localStorage.id = data[0].id
    });
}

function estadoDelete(id,nombreRol){
    this.id = id
    document.getElementById("textoEliminar").innerHTML = `Esta seguro de eliminar el rol ${nombreRol}`;
}