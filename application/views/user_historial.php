<section id="main-content">
    <section class="wrapper">
        <h2>HISTORIAL DE BUSQUEDA</h2>
        <hr>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                  <table class="table table-hover">

                    <?php foreach ($historial as $value) {
                      echo "<tr>";
                      echo "<td>";
                      echo $value->histo_termino;
                      echo "</td>";
                      echo "<td>";
                    ?>
                      <a style="width: 50%;" href="<?= base_url(); ?>Generarpeticion/EliminarHistorial/<?= $value->histo_id; ?>" class="btn btn-danger btn"><i class="fa fa-trash-o"></i> Quitar</a>
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