<section id="main-content">
    <section class="wrapper">
      <h2>REGISTRAR AUTOR</h2>
      <hr>
      <div class="form-panel">
              <form action="<?= base_url(); ?>Crear/CrearAutorP" method="post">

                      <div class="form-group">
                  <label for="">NOMBRES</label>
                  <input type="text" class="form-control" name="nombres">
                </div>
                <div class="form-group">
                  <label for="">APELLIDOS</label>
                  <input type="text" class="form-control" name="apellidos">
                </div>
                <div class="form-group">
                  <label for="">BIOGRAFIA</label>
                  <input type="text" class="form-control" name="biografia">
                  <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Registrar Autor</button>
                </div>
              </form>
            </div>
    </section>
</section>

