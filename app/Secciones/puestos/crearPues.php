<?php include("../../templates/header.php"); ?>
</br>
<div class="card">
    <div class="card-header">
        Agregar Puesto
        <br>
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombredelpuesto" class="from-label">Nombre del puesto: </label>
                <input type="text"
                class="form-control" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="">
            </div>
            <button type="submit" class="btn btn-success" >Agregar <a  href="indexPues.php"></a> </button>
            <a name="" id="" class="btn btn-primary" href="indexPues.php" role="button">Cancelar</a>
        </form>
    </div>
<?php include("../../templates/footer.php"); ?>