<?php include("../../templates/header.php"); ?>
<br>
Listar Usuario
<br>
<div class="card">
    <div class="card-header">
        <br>
        <a name="" id="" 
        class="btn btn-primary" 
        href="crearUs.php" role="button">
        Agregar registro
        </a>
</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="COL"> Nombre del Usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Jose Manuel </td>
                        <td>****</td>
                        <td>josemanuelcedilloruiz@gmail.com</td>
                        <td><a name="" id="" class="btn btn-info" href="editarUs.php" role="button">Editar</a>
                        <a name="" id="" class="btn btn-danger" href="eliminar.php" role="button">Eliminar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php include("../../templates/footer.php"); ?>