<section id="main-content">
    <section class="wrapper">

        <h2>AUTORES</h2>

        <div class="top-menu">
                <ul class=" pull-right  ">
                    <li><a href=" <?= base_url().'Crear/CrearAutorPage' ?>" class="btn btn-round btn-primary">Crear Autor</a></li>        
                </ul>
                
        </div>

        <hr>

        <input style="width: 30%;" id="buscar" type="text" class="form-control" placeholder="Buscar">

        <br>

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th><i class=" fa fa-edit"></i> BIOGRAFIA</th>
                                <th>OPCIONES</th>
                            </tr>
                        </thead>
                            <tbody id="ejemplar">
                                 <?php foreach ($autores as $autor){?>
                                    <tr>
                                    <td><?php echo $autor->auto_nombres; ?></td>
                                    <td><?php echo $autor->auto_apellidos;
                                    ?></td>
                                    <td><?php echo $autor->auto_biografia; ?></td>
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

