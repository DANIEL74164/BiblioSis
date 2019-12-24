<section id="main-content">
    <section class="wrapper">

        <h2>EJEMPLARES</h2>
        <div class="top-menu">
                <ul class=" pull-right  ">
                    <li><a href=" <?= base_url().'Crear/CrearEjemplarPage' ?>" class="btn btn-round btn-primary">Crear ejemplar</a></li>        
                </ul>
                
        </div>
<hr>

        <input style="width: 30%;" id="buscar" type="text" class="form-control" placeholder="Buscar">

        <br>

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-book"></i> TITULO</th>
                                <th class="hidden-phone"><i class="fa fa-user"></i> AUTOR</th>
                                <th><i class="fa fa-book"></i> AREA</th>
                                <th><i class=" fa fa-book"></i> CATEGORIA</th>
                                <th><i class=" fa fa-edit"></i> OPCIONES</th>
                            </tr>
                        </thead>
                            <tbody id="ejemplar">
                                 <?php foreach ($ejemplares as $ejem){?>
                                    <tr>
                                    <td><?php echo $ejem->ejem_titulo; ?></td>
                                    <td><?php 
                                    echo $ejem->autor_nom;
                                    echo " ";
                                    echo $ejem->autor_apell; 
                                    ?></td>
                                    <td><?php echo $ejem->area; ?></td>
                                    <td><?php echo $ejem->categoria; ?></td>
                                    <td>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Editar</button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i> Eliminar</button>
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

