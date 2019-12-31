<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>BiblioSis Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style-responsive.css" rel="stylesheet">

  </head>

  <body>

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="<?= base_url() . 'Dashboard/login'; ?>" method="post">
		        <h2 class="form-login-heading">Acceso al sistema</h2>
		        <div class="login-wrap">


		            <input name="username" type="text" class="form-control" placeholder="Usuario" autofocus>
		            <br>
		            <input name="password" type="password" class="form-control" placeholder="Contraseña">
		           
		            <div class="checkbox pull-right">
                		<input type="checkbox" name="checkbox" value="1">
                		<label for="checkbox">¿Ingresar como administrador?</label>
            		</div>

		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> ENTRAR</button>
		            <hr>
		            
		            
		            <div class="registration">
		            <h4>Registrarse</h4>
		            <p>Para poder utilizar el sistema de biblioteca es necesario ser estudiante de la Universidad Nacional del Altiplano - Puno.</p>
		            <p>Favor de registrarse en el siguiente formulario.</p>
		            <br/>
		                <span><a href="<?= base_url() . 'register'; ?>" class="btn btn-theme btn-block">Registrarse</a></span>
		            </div>
		
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url() ?>assets/js/jquery.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.backstretch.min.js"></script>


  </body>
</html>
