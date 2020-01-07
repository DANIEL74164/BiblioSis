<section id="main-content">
    <section class="wrapper">
      <h2>BUSQUEDA</h2>
      
      <div class="form-panel">

        <table class="table tabla-hover">
          <form action="<?= base_url(); ?>BuscarLibro/BusquedaLibros" method="post">
          <tr style="border: 1px solid #CDD2D1 ">
            <td>
              <div class="form-group" style="width: 100%;">
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
            </td>
            <td>
              <input style="width: 100%;" id="buscar" type="text" class="form-control" placeholder="Buscar" name="titulo">
            </td>
            <td>
              <button type="submit" class="btn btn-primary">Buscar Libro</button>
            </td>
          </tr>
        </form>
        </table>
            </div>
    </section>
</section>

