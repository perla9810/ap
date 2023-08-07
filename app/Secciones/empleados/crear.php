<?php include("../../templates/header.php"); ?>
<br>
<center>Crear empleado </center>
<br>
<div class="card">
    <div class="card-header">
        Datos del empleado
    </div>
            <label for="" class="form-label">Tipo de usuario</label>
            <select class="form-select form-select-sm" name="" id="idpuesto">
                <option value="cliente">Cliente</option>
                <option value="empleado">Empleado</option>
            </select><br>
    <div class="card-body">
        <form action="insertar.php" method="post" enctype="multipart/form-data"> 
            <div class="mb-3">
                <label for="" class="form-label">Primer nombre</label>
                <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Foto</label>
                <input type="file"
                class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Fotofie">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">CV(PDF)</label>
                <input type="file" class="form-control" name="cv" id="cv" placeholder="CV" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Puesto</label>
                <select class="form-select form-select-sm" name="" id="idpuesto">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Instanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fechadeingreso" class="form-label">Fecha de ingreso</label>
                <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-success" href="index.php" >Agregar </button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
            </form>
            <script>
                document.getElementById('tipo_usuario').addEventListener('change', function() {
                    var tipoUsuario = this.value;
                    var datosCliente = document.getElementById('datos_cliente');
                    var datosEmpleado = document.getElementById('datos_empleado');
    
                    if (tipoUsuario === 'cliente') {
                        datosCliente.style.display = 'block';
                        datosEmpleado.style.display = 'none';
                    } else if (tipoUsuario === 'empleado') {
                        datosCliente.style.display = 'none';
                        datosEmpleado.style.display = 'block';
                    }
                });
    
                document.getElementById('eliminar_cliente').addEventListener('click', function() {
                    // Lógica para eliminar cliente
                    console.log('Cliente eliminado');
                });
    
                document.getElementById('eliminar_empleado').addEventListener('click', function() {
                    // Lógica para eliminar empleado
                    console.log('Empleado eliminado');
                });
            </script>
        </form>
    </body>
    <div class="card-footer text-muted">
<?php include("../../templates/footer.php"); ?>
    </div>
</div>