      <!--sidebar start-->
      <aside>



          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <!--
              	  <h5 class="centered">
                   
                    <?php 
                      if (isset($_SESSION['usua_nombres']) && isset($_SESSION['usua_apellidos']) ) {
                        echo strtoupper($_SESSION['usua_nombres'])." ".strtoupper($_SESSION['usua_apellidos']);
                      }
                     ?>

                  </h5>
                -->
              	  	
                  <li>
                      <a href="<?= base_url()?>Portada">
                          <i class="fa fa-home"></i>
                          <span>PORTADA</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?= base_url()?>BuscarLibro">
                          <i class="fa fa-book"></i>
                          <span>BUSCAR LIBRO</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?= base_url()?>Prestamo/GenerarPrestamos">
                          <i class="fa fa-user"></i>
                          <span>LIBROS PRESTADOS</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?= base_url()?>Generarpeticion/GenerarFavoritos">
                          <i class="fa fa-book"></i>
                          <span>MIS LIBROS FAVORITOS</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?= base_url()?>BuscarLibro/HistorialBusqueda">
                          <i class="fa fa-book"></i>
                          <span>HISTORIAL DE BUSQUEDAS</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="<?= base_url()?>DatosUser">
                          <i class="fa fa-user"></i>
                          <span>DATOS DEL USUARIO</span>
                      </a>
                  </li>
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->