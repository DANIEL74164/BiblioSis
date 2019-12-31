<section id="main-content">
    <section class="wrapper">

        <h2>VISTA GENERAL</h2>
        <hr>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel" style="width: 50%;margin: 0 auto;">
                    <table class="table table-hover" style="margin: 0 auto;">
                        <thead>
                            <tr>
                                <th>TOTAL DE LIBROS PRESTADOS</th>
                                <th>TOTAL DE LIBROS FUERA DE PLAZO</th>
                            </tr>
                        </thead>
                            <tbody>
                              <tr>
                               <td>
                                 <?php
                               $totalpres=0;
                               foreach ($vistag as $value) {
                                $value->ejem_nprestamos;
                                $totalpres+=$value->ejem_nprestamos;
                               }
                               echo $totalpres;
                               ?>
                               </td>
                               <td>
                                <?php
                                $totalesta=0;
                                foreach ($estado as $value) {
                                  $value->pres_estado;
                                  $totalesta+=$value->pres_estado;
                                }
                                echo $totalesta;
                                 ?>
                               </td>
                              </tr>
                            </tbody>
                          </table>         
                </div>
                <br><br>
                        <h4 style="width: 77%;margin: 0 auto;">LIBROS MAS PRESTADOS</h4>
                        <br>
                       <div class="showback" style="width: 77%;margin: 0 auto;">
                                 <?php foreach ($vistag as $ejem){?>
                                      <p><?php echo $ejem->ejem_titulo; ?></p>
                                      <div class="progress">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $ejem->ejem_nprestamos ?>%">
                                      </div>
                                      </div>
                                 <?php } ?> 
                      </div>
            </div>
        </div>
    </section>
</section>

