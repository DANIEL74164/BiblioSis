<section id="main-content">
    <section class="wrapper">
        <h2>LIBROS PRESTADOS</h2>
        <hr>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                              <th><i class=" fa fa-user"></i> USUARIO</th>
                              <th><i class=" fa fa-book"></i> LIBROS</th>
                              <th><i class=" fa fa-calendar"></i> FECHA</th>
                              <th><i class=" fa fa-calendar"></i> FECHA FIN</th>
                              <th>Plazo</th>
                              <th><i class=" fa fa-edit"></i> OBSERVACION</th>
                              <th><i class=" fa fa-edit"></i> OPCIONES</th>
                            </tr>
                        </thead>
                            <tbody>
                                 <?php foreach ($prestamo as $pres){?>
                                    <tr>
                                    <td><?php echo $pres->usuario; ?></td>
                                    <td><?php echo $pres->libro;
                                    ?></td>
                                    <td><?php echo $pres->pres_fechaprestamo; ?></td>
                                    <td><?php echo $pres->pres_fechadevolucion; ?></td>
                                    <td><?php echo $pres->pres_dias; ?></td>
                                    <td><?php ?></td>
                                    <td>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Ver usuario</button>
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

