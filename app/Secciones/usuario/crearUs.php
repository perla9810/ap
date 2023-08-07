<?php include("../../templates/header.php"); ?>
</br>
<div class="card">
    <div class="card-header">
        Usuario
        <br>
    </div>
    <label for="" class="form-label">Tipo de usuario</label>
            <select class="form-select form-select-sm" name="" id="idpuesto">
                <option value="cliente">Cliente</option>
                <option value="empleado">Empleado</option>
            </select><br>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="usuario" class="from-label">Nombre del usuario: </label>
                <input type="text"
                class="form-control" name="usuario" id="usuario" aria-describedby="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" >Password</label>
                <input type="text" 
                class="form-control" name="password" id="password" aria-describedby="helId" placeholder="">
            </div>
            <div>
                <label for="email" class="form-label">Correo</label>
                <input type="email" 
                class="form-control" name="email" id="email" aria-describedby="" placeholder="">
                <br>
            </div>
            <button type="submit" href="indexUs.php"  class="btn btn-success">Agregar </button>
            <a name="" id="" class="btn btn-primary" href="indexUs.php" role="button">Cancelar</a>
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