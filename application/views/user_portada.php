<section id="main-content">
    <section class="wrapper">
        <h2>PORTADA</h2>
        <hr>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                        
                    <table class="table table-hover">
                        
                        <thead>
                            <tr>
                                <th>LIBRO</th>
                                <!--
                                <th><i class="fa fa-calendar"></i> FECHA</th>
                                <th><i class=" fa fa-edit"></i> OBSERVACION</th>
                                <th><i class=" fa fa-edit"></i> OPCIONES</th>
                              -->
                            </tr>
                        </thead>
                      
                            <tbody>

                              <?php foreach ($ejemplares as $tipo) { ?>
                                <?php echo $temp=$tipo->categoria ?>
                                <?php echo $tipo->ejem_cate_id; ?>
                                <?php if ($temp==$tipo->ejem_cate_id) {
                                  echo "hola";
                                } ?>

                              <?php } ?>





                                 <?php foreach ($ejemplares as $peticion){?>
                                    <tr>
                                      <td><?php echo $peticion->categoria ?></td>
                                    <td><?php echo $peticion->ejem_titulo; ?></td>
                                    <td><?php echo $peticion->ejem_valoracion;
                                    ?></td>
                                    <td>
                                    <button class="btn btn-primary btn-xs">Prestar</button>
                                    <button class="btn btn-danger btn-xs">Rechazar</button>
                                </td>
                                 </tr>
                                 <?php } ?> 
                              </tbody>
                          </table>



                      </div>
                  </div>
              </div>
    </section>
</section>

