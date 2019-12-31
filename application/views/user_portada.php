<section id="main-content">
    <section class="wrapper">
        <h2>PORTADA</h2>
        <hr>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <!--    
                    <table class="table table-hover">
                        
                        <thead>
                            <tr>
                                <th>LIBRO</th>
                                <!--
                                <th><i class="fa fa-calendar"></i> FECHA</th>
                                <th><i class=" fa fa-edit"></i> OBSERVACION</th>
                                <th><i class=" fa fa-edit"></i> OPCIONES</th>
                             
                            </tr>
                        </thead>
                      
                            <tbody>-->
                              <table class="table table-hover">
                              <?php 
                              $prueba=1;
                              foreach ($ejemplares as $tipo) { ?>
                                
                                  <thead>
                                    <tr>
                                      <th><?php echo "Area de ".$tipo->categoria ?></th>
                                        
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        
                                        <img src="<?php echo base_url().'data/'.$tipo->ejem_portada?>" alt="Image placeholder" class="card-img-top" height="132" width="93">
                                      
                                      </td>
                                    </tr>
                                    <tr>
                                      <td><?php echo $tipo->ejem_titulo ?></td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <?php $prueba=$tipo->ejem_valoracion;
                                          while ($prueba>0) {
                                             echo '<i class=" fa fa-star"></i>';
                                             $prueba-=1;
                                           } ?>
                                      </td>
                                    </tr> 
                                  </tbody>
                                <?php
                                
                                if ($tipo->ejem_cate_id != $prueba) {
                                  $prueba+=1;
                                } 

                               } ?>
                            </table>


                                <!--

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

-->

                      </div>
                  </div>
              </div>
    </section>
</section>

