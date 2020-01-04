<section id="main-content">
    <section class="wrapper">
      <h2>BUSQUEDA</h2>
      <hr>
      <div class="form-panel">

        <table class="table tabla-hover">
          <form action="<?= base_url(); ?>BuscarLibro/BusquedaLibros" method="post">
          <tr>
            <td>
              <div class="form-group" style="width: 100%;">
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
            </td>
            <td>
              <input style="width: 100%;" id="buscar" type="text" class="form-control" placeholder="Buscar" name="titulo">
            </td>
            <td>
              <button type="submit" class="btn btn-primary">Buscar Libro</button>
            </td>
          </tr>
        </form>
        </table>
        


        <table class="table tabla-hover">
            <?php foreach ($seleccion_busqueda as $key) {
              echo "<tr>";
              echo "<td>";
              ?>
              <img src="<?php echo base_url().'data/'.$key->ejem_portada?>" class="card-img-top" alt="..." height="150" width="100">
              <?php
              echo "</td>";
              echo "<td>";
              echo $key->ejem_titulo;
              echo "<br>";
              echo $key->autor_nom;
              echo " ".$key->autor_apell;
              echo "<br> ".$key->ejem_resumen;
              echo "</td>";
              echo "<td>";
              ?>
              <a href=" <?= base_url().'Editar/CrearEjemplarPage' ?>" class="btn btn-primary btn-xs"> <i class="fa fa-star"></i> Favorito</a>
              <a href=" <?= base_url().'Editar/EliminarEjemplar/$ejem' ?>" class="btn btn-danger btn-xs"> <i class="fa fa-pencil"></i> Generar peticion</a>

              <p class="card-text">Valoracion 
                <?php $temp=$key->ejem_valoracion;
                  while ($temp>0) {
                      echo '<i class=" fa fa-star"></i>';
                      $temp-=1;
                    } ?>                       
              </p>
              <?php
              echo "</td>";
              echo "</tr>";
            } ?> 
        </table>


        <!--

              <form action="<?= base_url(); ?>Crear/CrearEjemplar" method="post">

                <div class="form-group" style="width: 50%;">
                  <label for="">AUTOR</label>
                  <select class="form-control" name="autor">
                    <?php foreach ($seleccionautor as $Autor) { ?>
                      <option>
                        <?php echo $Autor->auto_id; ?>
                        <?php echo "."; ?>
                        <?php echo $Autor->auto_nombres; ?>
                        <?php echo $Autor->auto_apellidos; ?>
                      </option>
                    <?php } ?>
                  </select>
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
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input style="width: 30%;" id="buscar" type="text" class="form-control" placeholder="Buscar">
                      <button type="submit" class="btn btn-primary">Buscar</button>
                    </td>
                  </tr>

                </table>
              </form>
                
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">archivo</label>
                  <div class="col-sm-10">
                    <input type="file" name="imagen" class="form-control">
                  </div>
                </div>
               
              </form>
            -->
            </div>
    </section>
</section>

