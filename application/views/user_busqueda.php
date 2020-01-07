<section id="main-content">
    <section class="wrapper">
      <h2>BUSQUEDA</h2>
      
      <div class="form-panel">

        <table class="table tabla-hover">
          <form action="<?= base_url(); ?>BuscarLibro/BusquedaLibros" method="post">
          <tr style="border: 1px solid #CDD2D1 ">
            <td>
              <br>
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
              <br>
              <input style="width: 100%;" id="buscar" type="text" class="form-control" placeholder="Buscar" name="titulo">
            </td>
            <td>
              <br>
              <button type="submit" class="btn btn-primary">Buscar Libro</button>
            </td>
          </tr>
        </form>
        </table>
        
        <strong>Resultado de busqueda del libro </strong>


        <table class="table tabla-hover">
            <?php foreach ($seleccion_busqueda as $key) {
              echo "<tr>";
              echo "<td>";
              ?>
              <img src="<?php echo base_url().'data/'.$key->ejem_portada?>" class="card-img-top" alt="..." height="150" width="100">
              <?php
              echo "</td>";
              echo "<td>";
              echo "<strong>".$key->ejem_titulo."</strong>";
              echo "<br><br>".$key->autor_nom;
              echo " ".$key->autor_apell;
              echo "<br><br>".$key->ejem_resumen;
              echo "</td>";
              echo "<td>";
              ?>
              <a style="width: 100%;" href="<?= base_url(); ?>Generarpeticion/Favorito/<?= $key->ejem_id; ?>" class="btn btn-primary btn"><i class="fa fa-star"></i> Favorito</a>
              <p><br></p>
                <!--incio generar peticion-->
                 
              <button style="width: 100%;" class="btn btn-success" data-toggle="modal" data-target="#peticion">
                Generar peticion
                </button>
              <!-- Modal -->
              <div class="modal fade" id="peticion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                      <h4 class="modal-title" id="myModalLabel">Generar peticion</h4>
                    </div>
                    <div class="modal-body">

                      <form action="<?= base_url(); ?>Generarpeticion/Generar/<?= $key->ejem_id; ?>" method="post">
                      <table class="table" style="border: hidden;">
                        <tr>
                          <td style="width: 130px;text-align: center;">
                            <img src="<?php echo base_url().'data/'.$key->ejem_portada?>" class="card-img-top" alt="..." height="150" width="100">
                          </td>
                          <td>
                            <?php 
                            echo "<strong>".$key->ejem_titulo."</strong>"; 
                            echo "<br><br>".$key->autor_nom;
                            echo " ".$key->autor_apell;
                            echo "<br><br>".$key->ejem_resumen;
                            ?>
                            <p class="card-text"><br>Valoracion: 
                            <?php $temp=$key->ejem_valoracion;
                              while ($temp>0) {
                                echo '<i class=" fa fa-star"></i>';
                                $temp-=1;
                            } ?>                       
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label>Dias de prestamo:</label>
                            <input style="width: 100%;" type="number" class="form-control" placeholder="N° de dias" name="dias">
                          </td>
                        </tr>
                      </table>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary">Generar peticion</button>
                    </div>
                  </div>
                </form>
                </div>
              </div>

                <!--final generar peticion-->

              <p class="card-text"><br>Valoracion: 
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

