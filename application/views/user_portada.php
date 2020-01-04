<section id="main-content">
    <section class="wrapper">
        <h2>PORTADA</h2>
        <hr>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                  <table class="table table-hover">
                    <tr>
                      <td>
                  <?php $tempcate=1; ?>
                  <?php foreach ($area_1 as $key) {?>               
                  <?php if ($tempcate==1) { ?>
                  <h4><?php echo "Area de ".$key->categoria; ?></h4>
                  <?php $tempcate+=1; } ?>
                  <div class="card" style="width: 170px; float: left; text-align: center;">
                    <br>
                    <img src="<?php echo base_url().'data/'.$key->ejem_portada?>" class="card-img-top" alt="..." height="150" width="100">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $key->ejem_titulo; ?></h5>
                      <p class="card-text"><?php $temp=$key->ejem_valoracion;
                                    while ($temp>0) {
                                        echo '<i class=" fa fa-star"></i>';
                                        $temp-=1;

                                      } ?></p>
                    </div>
                  </div>
                  <?php } ?>
                  </td>
                  </tr>
                  </table>

                  <!--area_2-->
                  
                  <table class="table table-hover">
                    <tr>
                      <td>
                  <?php $tempcate=1; ?>
                  <?php foreach ($area_2 as $key) {?>            
                  <?php if ($tempcate==1) { ?>
                  <h4><?php echo "Area de ".$key->categoria; ?></h4>
                  <?php $tempcate+=1; } ?>
                  <div class="card" style="width: 170px; float: left; text-align: center;">
                    <br>
                    <img src="<?php echo base_url().'data/'.$key->ejem_portada?>" class="card-img-top" alt="..." height="150" width="100">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $key->ejem_titulo; ?></h5>
                      <p class="card-text"><?php $temp=$key->ejem_valoracion;
                                    while ($temp>0) {
                                        echo '<i class=" fa fa-star"></i>';
                                        $temp-=1;

                                      } ?></p>
                    </div>
                  </div>
                  <?php } ?>
                  </td>
                  </tr>
                  </table>

                  <!--Area_3-->

                  <table class="table table-hover">
                    <tr>
                      <td>
                  <?php $tempcate=1; ?>
                  <?php foreach ($area_3 as $key) {?>
                               
                  <?php if ($tempcate==1) { ?>
                  <h4><?php echo "Area de ".$key->categoria; ?></h4>
                  <?php $tempcate+=1; } ?>
                  <div class="card" style="width: 170px; float: left; text-align: center;">
                    <br>
                    <img src="<?php echo base_url().'data/'.$key->ejem_portada?>" class="card-img-top" alt="..." height="150" width="100">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $key->ejem_titulo; ?></h5>
                      <p class="card-text"><?php $temp=$key->ejem_valoracion;
                                    while ($temp>0) {
                                        echo '<i class=" fa fa-star"></i>';
                                        $temp-=1;

                                      } ?></p>
                    </div>
                  <!--
                  <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                  </div>
                    -->
                  </div>
                  <?php } ?>
                  </td>
                  </tr>
                  </table>
                  </div>
                  </div>
              </div>
    </section>
</section>

