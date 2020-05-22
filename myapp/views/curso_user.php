
          <div style="background: #E7E7E7 !important" class="jumbotron">
            <div class="container" style="color: #5C5D5D; margin: 0 10% 0 10%; width:80%">
              <div class="row">
                <div class="col-md-12">
                  <div style="color: #77778C">
                    <?php if (isset($curso_user)) { ?>
                        <h3>¡Hola <?php print $_SESSION['logged_in']['nombre']; ?>!, bienvenido al curso de <?php print $curso_user['nombre_curso'] ?></h3>
                        <p>Progreso: </p>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php print $curso_user['progreso'] ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php print $curso_user['progreso'] ?>%">
                            <?php print $curso_user['progreso'] ?>%
                          </div>
                        </div>
                    <?php } else if (isset($_SESSION['logged_in']['nombre'])) { ?>
                      <?= validation_errors(); ?>
                      <?= form_open(base_url().'Cursos/compracurso'); ?>
                      <input type="hidden" name="id_curso" value="<?php print $id_curso ?>">
                      <h4>¡Hola <?php print $_SESSION['logged_in']['nombre']; ?>!, si deseas realizar el curso de <?php print $data_curso['nombre'] ?> <button type="submit" class="btn btn-danger">¡Compralo YA!</button></h4>
                      <?= form_close(); ?>
                    <?php } else { ?>
                      <h4>Para poder realizar los cursos deber estar registrado, haz login en <a href="<?php echo base_url().'Inicio/index' ?>" class="btn btn-info">Inicio</a> o si no estas registrado, hazlo aqui: <a href="<?php echo base_url().'User/registro' ?>" class="btn btn-danger">Registrate</a></h4>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

</body>
</html>
