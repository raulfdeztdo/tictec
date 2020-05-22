
          <div style="background: #E7E7E7 !important" class="jumbotron">
            <div class="container" style="color: #5C5D5D; margin: 0 25% 0 25%; width:75%">
              <div class="row">
                <div class="col-md-8">
                  <div style="color: #77778C">
                    <?php if (isset($cursos)) { ?>
                        <h3>Mis cursos:</h3>
                        <?php for ($i=0; $i < count($cursos) ; $i++) { ?>
                          <?= validation_errors(); ?>
                          <?= form_open(base_url().'Cursos/cursodetalles'); ?>
                          <input type="hidden" name="id_curso" value="<?php print $cursos[$i]['id_curso']; ?>">
                          <button type="submit" class="list-group-item" style="border-radius: 12px">
                          <div class="list-group-item-text">
                            <h3><?php print $cursos[$i]['nombre_curso']; ?></h3>
                            <h4>Progreso:</h4>
                            <div class="progress">
                              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php print $cursos[$i]['progreso'] ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php print $cursos[$i]['progreso'] ?>%">
                                <?php print $cursos[$i]['progreso'] ?>%
                              </div>
                            </div>
                          </div>
                        </button>
                        <?= form_close(); ?>
                        <?php } ?>
                    <?php } else { ?>
                          <h4>Ahoramismo no estás realizando ningún curso, si quiere puede ver los cursos disponibles en la sección de <a href="<?php echo base_url().'Cursos/categorias' ?>" class="btn btn-warning">Categorias</a></h4>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
