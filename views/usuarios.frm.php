<?php include_once "header.php";?>
    <form id="usuarioFrm" action="" class="">
        <div class="row my-5 justify-content-end">  
            <div class="col-6">
                <h1 class="text-center">Usuarios</h1>
            </div>
            <div class="col-3 align-self-end">
                <a onclick="create()"  type="button" class="btn btn-primary" value="Registar">Registrar</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3">
                <label class="form-label">Tipo Documento</label>
                <select class="form-control" name="selTipoDoc" id="selTipoDoc">
                    <option value="" selected disabled>Seleccionar</option>
                    <option value="TI">T.I</option>
                    <option value="CC">C.C</option>
                    <option value="NUIP">NUIP</option>
                </select>
            </div>    
            <div class="col-3">
                <label class="form-label">Numero</label>
                <input class="form-control" type="number" name="txtNumero" id="txtNumero">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label class="form-label">Nombre</label>
                <input class="form-control" type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="col-4">
                <label class="form-label">Apellido</label>
                <input class="form-control" type="text" name="txtApellido" id="txtApellido">
            </div>    
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label class="form-label">Correo</label>
                <input class="form-control" type="email" name="txtCorreo" id="txtCorreo">
            </div>
            <div class="col-4">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="txtPassword" id="txtPassword">
            </div>    
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <label class="form-label">Direccion</label>
                <input class="form-control" type="text" name="txtDireccion" id="txtDireccion">
            </div>
            <div class="col-4">
                <label class="form-label">Telefono</label>
                <input class="form-control" type="text" name="txtTelefono" id="txtTelefono">
            </div>    
        </div>
        <div class="row justify-content-center">
            <div class="col-2">
                <label class="form-label">Genero</label>
                <select class="form-control" name="selGenero" id="selGenero">
                    <option value="" selected disabled>Seleccionar</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="col-2">
                <label class="form-label">Rol</label>
                <select class="form-control" name="selRol" id="selRol">
                </select>
            </div>    
        </div>
        <div class="row justify-content-center">
            <h2 class="mt-5 mb-3 py-1 text-center">Datos Usuarios</h2>
            <div class="col-8">
                <table id="tabla" class="table table-hover table-bordered border-dark">
                    <thead>
                        <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col" width="25%">Nombre</th>
                        <th scope="col" width="25%">Apellido</th>
                        <th scope="col" width="25%">Correo</th>
                        <th scope="col" width="25%">Rol</th>
                        <th scope="col" width="">opciones</th>
                        </tr>
                    </thead>
                    <tbody id="tableUsuarios">
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    <script src="./assets/js/usuarios.js"></script>

<?php include_once "footer.php";?>