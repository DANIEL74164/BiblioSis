<!DOCTYPE html>
<html>
<head>
	<title>Registro de Nuevo Usuario</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>BiblioSis</title>

    <script src="<?= base_url() ?>assets/js/jquery.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-1.8.3.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?= base_url() ?>assets/js/chart-master/Chart.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
                $(document).ready(function(){
                $("#buscar").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#ejemplar tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        </script>
</head>
<body>

<section id="main-content">
    <section class="wrapper">
      <h2>Registro de Usuario</h2>
      <hr>
      <div class="form-panel">
        <form action="<?= base_url(); ?>Register/index" method="post">
                <div class="form-group">
                  <label for="">CODIGO DE ESTUDIANTE: </label>
                  <input type="text" class="form-control" name="codigo" >
                </div>
                <div class="form-group" >
                  <label for="">USUARIO</label>
                  <input type="text" class="form-control" name="usuario" >
                </div>
                <div class="form-group" >
                  <label for="">NOMBRES</label>
                  <input type="text" class="form-control" name="nombres" >
                </div>
                <div class="form-group">
                  <label for="">APELLIDOS</label>
                  <input type="text" class="form-control" name="apellidos">
                </div>
                <div class="form-group">
                  <label for="">DIRECCION</label>
                  <input type="text" class="form-control" name="direccion">             
                </div>
                <div class="form-group">
                  <label for="">CONTRASEÑA</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                  <label for="">CONFIRMAR</label>
                  <input type="password" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">EMAIL</label>
                  <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label for="">TELEFONO</label>
                  <input type="text" class="form-control" name="telefono">
                </div>
                   
                  <tr>
                    <td colspan="2">
                      <button type="submit" class="btn btn-primary" href="<?= base_url().'"Dashboard/login","location"'; ?>">Registrar</button>
                    </td>
                  </tr>

                </table>
              </form>
              </form>
            </div>
    </section>
</section>



</body>
</html>