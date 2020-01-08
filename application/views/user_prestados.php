<section id="main-content">
    <section class="wrapper">
        <h2>LIBROS PRESTADOS</h2>
        <hr>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">

                  <table class="table table-hover">

                    <?php foreach ($Pendientes as $value) {
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
                      echo "<td style='width:270px;'>";
                      echo "<br>Estado: <br> Pendiente";
                    ?>
                    <?php
                      echo "</td>";
                      echo "<td>";
                    ?>
                    <a href="<?= base_url(); ?>EditarPeticion/EliminarPeticionUser/<?= $id=$value->peti_id; ?>" class="btn btn-danger btn"> rechazar</a>
                    <?php
                      echo "</td>";
                      echo "</tr>";
                    } ?>
                  </table>

                  <table class="table table-hover">

                    <?php foreach ($Prestamos as $value) {
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
                      echo "<td style='width:270px;'>";
                      echo "<br>Estado: <br> Prestado <br><br> Devolucion: ";
                      echo $value->pres_fechadevolucion;
                    ?>
                    
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
