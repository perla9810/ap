<?php include("../../templates/header.php"); ?>
</br>
<div class="card">
    <div class="card-header">
        Puesto
        <br>
        <a name="" id="" 
        class="btn btn-primary" 
        href="crearPues.php" role="button">
        Agregar registro
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="COL"> Puesto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Programador Jr</td>
                        <td><a name="" id="" class="btn btn-info" href="editarPues.php" role="button">Editar</a>
                        <a name="" id="" class="btn btn-danger" href="eliminar.php" role="button">Eliminar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>