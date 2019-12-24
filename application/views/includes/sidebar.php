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
                      <a href="<?= base_url()?>Vistageneral">
                          <i class="fa fa-home"></i>
                          <span>VISTA GENERAL</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?= base_url()?>Ejemplares">
                          <i class="fa fa-book"></i>
                          <span>EJEMPLARES</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?= base_url()?>Autores">
                          <i class="fa fa-user"></i>
                          <span>AUTORES</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?= base_url()?>Peticiones">
                          <i class="fa fa-book"></i>
                          <span>PETICIONES DE LIBROS</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?= base_url()?>Prestamo">
                          <i class="fa fa-book"></i>
                          <span>LIBROS PRESTADOS</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?= base_url()?>Reportes">
                          <i class="fa fa-exclamation"></i>
                          <span>REPORTES</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="<?= base_url()?>Datosadmin">
                          <i class="fa fa-user"></i>
                          <span>DATOS DEL ADMINISTRADOR</span>
                      </a>
                  </li>
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->