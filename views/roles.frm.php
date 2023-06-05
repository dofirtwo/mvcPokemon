<?php include_once "header.php"; ?>   
<form id="rolesFrm"> 
    <div class="row">
        <div class="col-12">
            <!-- //Formulario -->
            <h1 class="text-center">Formulario Roles</h1>
            <!-- //Fin Formulario -->
        </div>
        <div class="row d-flex justify-content-end">
            <div class="col-6 " >
                <label class="form-label">Nombre del Rol:</label>
                <input class="form-control" type="text" name="txtRol" id="txtRol">
            </div>
            <div class="col-3 align-self-end">
                <a onclick="create()" class="btn btn-primary" type="button" value="Registar"><i class="fa-solid fa-download fa-beat"></i> Registrar</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <h1 class="mt-3 mb-3 text-center">Roles</h1>
            <div class="col-9">
            <table id="tabla" class="table table-hover table-bordered border-dark">
                <thead>
                    <tr>
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="25%">Roles</th>
                    <th scope="col" width="25%">Estado</th>
                    <th scope="col" width="">opciones</th>
                    </tr>
                </thead>
                <tbody id="tableRol">
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="row">
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header bg-warning bg-gradient">
                    <h1 class="modal-title fs-5" id="updateModalLabel">Modificar Rol</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-9 " >
                        <label class="form-label">Nombre del Rol:</label>
                        <input class="form-control" type="text" name="txtRolUpdate" id="txtRolUpdate">
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button onclick="update()" type="button" class="btn btn-warning" data-bs-dismiss="modal">Modificar</button>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header bg-danger bg-gradient">
                        <h1 class="modal-title fs-5 col-11 text-center ms-4" id="deleteModalLabel">Eliminar Rol</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3 id="textoEliminar" class="text-center fw-bold"><h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button onclick="deletes()" type="button" class="btn btn-primary"  data-bs-dismiss="modal">Eliminar</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-warning" onclick="actualizarEstado()">Estado</a>
</form>
<?php include_once "footer.php";?>
<script src="./assets/js/roles.js"></script>