<?php include("../../templates/header.php"); ?>
<br>
Editar empleados
<br>
<div class="form_sesion">
<?php   
    include("../../conexion.php");
                    $id = $_REQUEST['id'];  
                    $query = "SELECT * FROM usuario WHERE id=$id";
                    $res = $conexion ->query($query);
                    $row = $res->fetch_assoc();
                    ?>
    <form action="modUs.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
        Datos del Usuario
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data"> 
        <div class="mb-3">
                <label for="" class="form-label">ID</label>
                <input type="text" id="id" name="id" value="<?php echo $row['id']; ?>" required><br>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nombre usuario</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label" >Password</label>
                <input type="text" 
                class="form-control" name="password" id="password" aria-describedby="helId" placeholder="" value="<?php echo $row['password']; ?>" required><br>
            </div>
            <div>
                <label for="email" class="form-label">Correo</label>
                <input type="email" 
                class="form-control" name="email" id="email" aria-describedby="" placeholder=""value="<?php echo $row['email']; ?>" required><br>
            </div>
                <br>
            </div>
            <button type="submit" class="btn btn-success">Modificar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
        
    </div>
<?php include("../../templates/footer.php"); ?>