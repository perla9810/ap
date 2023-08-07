<?php include("../../templates/header.php"); ?>
<br>
Editar empleados
<br>
<div class="form_sesion">
<?php   
    include("../../conexion.php");
                    $nom = $_REQUEST['nombre'];  
                    $query = "SELECT * FROM empleados WHERE nombre=$nom";
                    $res = $conexion ->query($query);
                    $row = $res->fetch_assoc();
                    ?>
    <form action="modEmp.php?nombre=<?php echo $row['nombre'];?>" method="POST" enctype="multipart/form-data">
        Datos del empleado

    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data"> 
            <div class="mb-3">
                <label for="" class="form-label">Primer nombre</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
            </div>
            <div class="mb-3">
                IMagen seleccionada: <img height="50px" width="auto" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']);?>" /><br>
                <label for="" class="form-label">Ingresa una imagen</label>
                <input type="file" class="form-control" name="foto" id="foto" placeholder="foto" aria-describedby="fileHelpId">
            </div>
            <div class="mb-3">
                Documento seleccionada: <docs height="50px" width="auto" src="data:docs/pdf;base64,<?php echo base64_encode($row['cv']);?>" /><br>
                <label for="" class="form-label">CV(PDF)</label>
                <input type="file" class="form-control" name="cv" id="cv" placeholder="cv" aria-describedby="fileHelpId">
            </div>
            <div class="mb-3">
                <label for="pue" class="form-label">Puesto</label>
                <select class="form-select form-select-sm" name="" id="idpuesto" value="<?php echo $row['apellido_pat']; ?>" required><br>
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Instanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fechadeingreso" class="form-label">Fecha de ingreso</label>
                <input type="date" class="form-control" name="fechadeingreso" value="<?php echo $row['fecha_contratacion']; ?>"><br>
            </div>
            <button type="submit" class="btn btn-success">Modificar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
        
    </div>
<?php include("../../templates/footer.php"); ?>