<section id="main-content">
    <section class="wrapper">
      <h2>DATOS DEL ADMINISTRADOR</h2>
      <hr>
      <div class="form-panel">
        <form action="<?= base_url(); ?>EditarEliminar/EditarAdmin" method="post">
                <div class="form-group">
                  <label for="">USUARIO</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosadmin as $usuario )?><?php echo $usuario->usua_login; ?>" name="usuario" >
                </div>

                <div class="form-group" style="width: 50%;">
                  <label for="">NOMBRES</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosadmin as $usuario )?><?php echo $usuario->usua_nombres; ?>" name="nombres" >
                </div>
                <div class="form-group">
                  <label for="">APELLIDOS</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosadmin as $usuario )?><?php echo $usuario->usua_apellidos; ?>" name="apelliods">
                </div>
                <div class="form-group">
                  <label for="">DIRECCION</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosadmin as $usuario )?><?php echo $usuario->usua_direccion; ?>" name="direccion">             
                </div>
                <div class="form-group">
                  <label for="">EMAIL</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosadmin as $usuario )?><?php echo $usuario->usua_email; ?>" name="email">
                </div>
                <div class="form-group">
                  <label for="">CELULAR</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosadmin as $usuario )?><?php echo $usuario->usua_telefono; ?>" name="celular">
                </div>
                   
                  <tr>
                    <td colspan="2">
                      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </td>
                  </tr>

                </table>
              </form>
              </form>
            </div>
    </section>
</section>

