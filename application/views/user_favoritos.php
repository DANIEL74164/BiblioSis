<section id="main-content">
    <section class="wrapper">
        <h2>LIBROS PRESTADOS</h2>
        <hr>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                  <table class="table table-hover">

                    <?php foreach ($SeleccionFavoritos as $value) {
                      echo "<tr>";
                      echo "<td>";
                    ?>
                      <img src="<?php echo base_url().'data/'.$value->PORTADA?>" class="card-img-top" alt="..." height="150" width="100">
                    <?php
                      echo "</td>";
                      echo "<td>";
                      echo $value->TITULO;
                      echo "<br><br>".$value->autorNombre;
                      echo " ".$value->autorApellido;
                      echo "<br><br>".$value->RESUMEN;
                      echo "</td>";
                      echo "<td>";
                      echo "Estado: ";
                      echo "Devolucion: ";
                      echo "</td>";
                      echo "<td>";
                    ?>
                      <a style="width: 100%;" href="<?= base_url(); ?>Generarpeticion/Favorito" class="btn btn-success btn"> Cancelar peiticion</a>
                    <?php
                      echo "</td>";
                      echo "</tr>";
                    } ?>
                  </table>
                  </div>
                </div>
            </div>
    </section>
</section>

