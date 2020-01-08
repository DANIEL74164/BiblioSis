<section id="main-content">
    <section class="wrapper">
        <h2>PETICIONES DE LIBROS</h2>
        <hr>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-book"></i> LIBRO</th>
                                <th><i class="fa fa-calendar"></i> FECHA</th>
                                <th><i class=" fa fa-edit"></i> OBSERVACION</th>
                                <th><i class=" fa fa-edit"></i> OPCIONES</th>
                            </tr>
                        </thead>
                            <tbody>
                                 <?php foreach ($peticiones as $peticion){?>
                                    <tr>
                                    <td><?php echo $peticion->ejemplar; ?>
                                    </td>
                                    <td><?php echo $peticion->peti_fechareg;
                                    ?></td>
                                    <td><?php echo $peticion->peti_obs; ?></td>
                                    <td>
                                    <a href="<?= base_url(); ?>EditarPeticion/PrestarPeticion/<?= $id=$peticion->peti_id; ?>" class="btn btn-primary btn"> prestar</a>
                                    
                                    <a href="<?= base_url(); ?>EditarPeticion/EliminarPeticion/<?= $id=$peticion->peti_id; ?>" class="btn btn-danger btn"> rechazar</a>
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

