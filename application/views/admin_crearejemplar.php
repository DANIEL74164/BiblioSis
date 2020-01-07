<section id="main-content">
    <section class="wrapper">
      <h2>REGISTRAR EJEMPLAR</h2>
      <hr>
      <div class="form-panel">

              <form action="<?= base_url(); ?>Crear/CrearEjemplar" method="post">

                <div class="form-group">
                  <label for="">TITULO</label>
                  <input type="text" class="form-control" name="titulo">
                </div>

                <div class="form-group" style="width: 50%;">
                  <label for="">AUTOR</label>
                  <select class="form-control" name="autor">
                    <?php foreach ($seleccionautor as $Autor) { ?>
                      <option>
                        <?php echo $Autor->auto_id; ?>
                        <?php echo "."; ?>
                        <?php echo $Autor->auto_nombres; ?>
                        <?php echo $Autor->auto_apellidos; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">EDITORIAL</label>
                  <input type="text" class="form-control" name="editorial">
                </div>
                <div class="form-group">
                  <label for="">NUMERO DE PAGINAS</label>
                  <input type="number" class="form-control" name="paginas">
                </div>
                <div class="form-group">
                  <label for="">ISBN</label>
                  <input type="number" class="form-control" name="isbn">
                </div>
                <div class="form-group">
                  <label for="">IDIOMA</label>
                  <input type="text" class="form-control" name="idioma">
                </div>
                    </td>
                    <td>
                      <div class="form-group">
                  <label for="">PORTADA</label>
                  <input type="text" class="form-control" name="portada" placeholder=" JPG, PNG">
                </div>
                <div class="form-group">
                  <label for="">RESUMEN</label>
                  <input type="textarea" class="form-control" name="resumen" placeholder="breve resumen del libro">
                </div>

                <div class="form-group" style="width: 50%;">
                  <label for="">TIPO</label>
                  <select class="form-control" name="tipo">
                    <?php foreach ($selecciontipo as $Tipo) { ?>
                      <option>
                        <?php echo $Tipo->tipo_id; ?>
                        <?php echo "."; ?>
                        <?php echo $Tipo->tipo_nombre; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group" style="width: 50%;">
                  <label for="">CATEGORIA</label>
                  <select class="form-control" name="categoria">
                    <?php foreach ($seleccioncategoria as $Categoria) { ?>
                      <option>
                        <?php echo $Categoria->cate_id; ?>
                        <?php echo "."; ?>
                        <?php echo $Categoria->cate_nombre; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group" style="width: 50%;">
                  <label for="">AÑO</label>
                  <input type="text" class="form-control" name="date" placeholder="Año de publicacion">
                </div>

                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <button type="submit" class="btn btn-primary">Registrar Ejemplar</button>
                    </td>
                  </tr>

                </table>
                </form>
              </form>
            </div>
    </section>
</section>

