
          <div style="background: #E7E7E7 !important" class="jumbotron">
            <div class="container" style="color: #5C5D5D; margin: 0 25% 0 25%; width:75%">
              <div class="row">
                <div class="col-md-8">
                  <div style="color: #77778C">
                    <?php if (isset($cursos_prof)) { ?>
                        <h3>Mis cursos subidos:</h3>
                        <?php for ($i=0; $i < count($cursos_prof) ; $i++) { ?>
                          <?= validation_errors(); ?>
                          <?= form_open(base_url().'Cursos/cursodetalles'); ?>
                          <input type="hidden" name="id_curso" value="<?php print $cursos_prof[$i]['id_curso']; ?>">
                          <button type="submit" class="list-group-item" style="border-radius: 12px">
                          <div class="list-group-item-text">
                            <h3><?php print $cursos_prof[$i]['nombre']; ?></h3>
                            <h4>Descripcion:</h4>
                            <h4><?php print $cursos_prof[$i]['decripcion']; ?></h4>
                          </div>
                        </button>
                        <?= form_close(); ?>
                        <?php } ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

</body>
</html>
