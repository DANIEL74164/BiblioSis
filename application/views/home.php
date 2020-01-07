
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

          	<h1 style="text-align: center;">BIENVENIDO ADMINISTRADOR
          		<?php 
                    if (isset($_SESSION['usua_nombres']) && isset($_SESSION['usua_apellidos']) ) {
                        echo strtoupper($_SESSION['usua_nombres'])." ".strtoupper($_SESSION['usua_apellidos']);
                    }
                ?>
          	</h1>

          </section>
      </section>

      <!--main content end-->