<?php include("../../templates/header.php"); ?>
<br>
Editar empleados
<br>
<div class="form_sesion">
<?php   
    include("../../conexion.php");
                    $id = $_REQUEST['id'];  
                    $query = "SELECT * FROM puestos WHERE id=$id";
                    $res = $conexion ->query($query);
                    $row = $res->fetch_assoc();
                    ?>
    <form action="modPues.ph?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
        Datos del puesto
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data"> 
            <div class="mb-3">
                <label for="" class="form-label">ID</label>
                <input type="text" id="id" name="id" value="<?php echo $row['id']; ?>" required><br>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">puesto</label>
                <input type="text" id="puesto" name="puesto" value="<?php echo $row['puesto']; ?>" required><br>
            </div>
            <button type="submit" class="btn btn-success">Modificar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
        
    </div>
<?php include("../../templates/footer.php"); ?>