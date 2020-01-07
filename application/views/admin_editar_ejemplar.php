<section id="main-content">
    <section class="wrapper">
      <h2>DATOS DEL ADMINISTRADOR</h2>
      <hr>
      <div class="form-panel">
        <form action="<?= base_url(); ?>EditarEliminar/EditarEjemplar" method="post">
                <div class="form-group">
                  <label for="">N°</label>
                  <input type="disabled" class="form-control" value="<?php foreach ($datosejem as $ejemplares )?><?php echo $ejemplares->ejem_id; ?>" name="ejem_id" >
                </div>
                <div class="form-group">
                  <label for="">TITULO</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosejem as $ejemplares )?><?php echo $ejemplares->ejem_titulo; ?>" name="ejem_titulo" >
                </div>

                <div class="form-group" style="width: 50%;">
                  <label for="">AUTOR</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosejem as $ejemplares )?><?php echo $ejemplares->usua_nombres; ?>" name="usua_nombres" >
                </div>
                <div class="form-group">
                  <label for="">EDITORIAL</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosejem as $ejemplares )?><?php echo $ejemplares->ejem_editorial; ?>" name="ejem_editorial">
                </div>
                <div class="form-group">
                  <label for="">NUMERO DE PAGINAS</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosejem as $ejemplares )?><?php echo $ejemplares->ejem_paginas; ?>" name="ejem_paginas">             
                </div>
                <div class="form-group">
                  <label for="">ISBN</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosejem as $ejemplares )?><?php echo $ejemplares->ejem_isbn; ?>" name="ejem_isbn">
                </div>
                <div class="form-group">
                  <label for="">IDIOMA</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosejem as $ejemplares )?><?php echo $ejemplares->ejem_idioma; ?>" name="ejem_idioma">
                </div>
                <div class="form-group">
                  <label for="">PORTADA</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosejem as $ejemplares )?><?php echo $ejemplares->ejem_portada; ?>" name="ejem_portada">
                </div>
                <div class="form-group">
                  <label for="">RESUMEN</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosejem as $ejemplares )?><?php echo $ejemplares->ejem_resumen; ?>" name="ejem_resumen">
                </div>
                <div class="form-group" style="width: 50%;">
                  <label for="">TIPO</label>
                  <select class="form-control" name="tipo">
                    <?php foreach ($selecciontipo as $Tipo) { ?>
                      <option>
                        <?php echo $Tipo->tipo_id; ?>
                        <?php echo "."; ?>
                        <?php echo $Tipo->tipo_nombre; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group" style="width: 50%;">
                  <label for="">CATEGORIA</label>
                  <select class="form-control" name="categoria">
                    <?php foreach ($seleccioncategoria as $Categoria) { ?>
                      <option>
                        <?php echo $Categoria->cate_id; ?>
                        <?php echo "."; ?>
                        <?php echo $Categoria->cate_nombre; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
                 <div class="form-group">
                  <label for="">AÑO</label>
                  <input type="text" class="form-control" value="<?php foreach ($datosejem as $ejemplares )?><?php echo $ejemplares->ejem_anio; ?>" name="ejem_anio">
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

