<?php include("../../templates/header.php"); ?>
</br>
<div class="card">
    <div class="card-header">
        Empleados
        <br>
        <a name="" id="" 
        class="btn btn-primary" 
        href="crear.php" role="button">
        Agregar registro
        </a>
</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="col">Araceli</th>
                        <td scope="COL"> img</th>
                        <td scope="col">Encargado</th>
                        <td scope="col">CV.pdf</th>
                        <td scope="col">05-mayo-2023</th>
                        <td><a name="" id="" class="btn btn-info" href="editar.php" role="button">Editar</a>
                        <a name="" id="" class="btn btn-danger" href="eliminar.php" role="button">Eliminar</a></td>
                    </tr>
                </tbody>
                    <?php
                    include("../../conexion.php");
                    $query = "SELECT * FROM empleados";
                    $res = $conexion ->query($query);
                    while($row = $res->fetch_assoc()){
                    ?>
                    <tr>
                    <td scope="row"><?php echo $row['nombre'];?></td>
                        <td scope="row"><img height="50px" width="auto" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"/></td>
                        <td scope="row"><?php echo $row['puesto'];?></td>
                        <td scope="row"><img height="50px" width="auto" src="data:docs/pdf;base64,<?php echo base64_encode($row['cv']); ?>"/></td>
                        <td scope="row"><?php echo $row['fecha_ingreso'];?></td>
                        <td><a name="" id="" class="btn btn-info" href="editar.php" role="button">Editar</a>
                        <a name="" id="" class="btn btn-danger" href="eliminar.php" role="button">Eliminar</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
        
    </div>



    <?php include("../../templates/footer.php"); ?>
    </div>





