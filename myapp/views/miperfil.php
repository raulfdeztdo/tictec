<div style="background: #0C3045 !important; margin-top:50px" class="jumbotron">
  <div class="container text-center" style="color: #5C5D5D; width:90%">
    <div class="row" style="padding: 0 25% 0 25%">
        <div class="panel-group">
          <div class="panel panel-default" style="text-align: center; align-content: center">
            <div class="panel-heading"><h2>Mi perfil</h2></div>
            <div class="panel-body">
              <?= validation_errors(); ?>
              <?= form_open(base_url().'User/editarperfil'); ?>
                  <img src="<?= asset_url('img/logo-user.png') ?>" alt="Logo-usuario" width="15%"><br><br>
                  <table width="60%" class="table-responsive" style="margin: 0 20% 0 20%">
                    <tr>
                      <td><div class="input-group" style="margin: 3%"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input id="user" type="text" class="form-control" name="user" placeholder="<?php print $data_user['nombre']; ?>" style="width: 90%" disabled></div></td>
                      <td><div class="input-group" style="margin: 3%"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input id="email" type="email" class="form-control" name="email" placeholder="<?php print $data_user['email']; ?>" style="width: 90%" disabled></div></td>
                    </tr>
                    <tr>
                      <td><div class="input-group" style="margin: 3%">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                        <input id="group" type="text" class="form-control" name="group" placeholder="<?php print $data_user['group']; ?>" style="width: 90%" disabled></div></td>
                      <td><div class="input-group" style="margin: 3%"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input id="fecha_nac" type="date" class="form-control" name="fecha_nac" value="<?php print $data_user['f_nac']; ?>" style="width: 90%" disabled></div></td>
                    </tr>
                    <tr>
                      <td><div class="input-group" style="margin:3%">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" style="width: 90%" disabled></div></td>
                      <td><div class="input-group" style="margin:3%"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password2" type="password" class="form-control" name="password2" placeholder="Repetir contraseña" style="width: 90%" disabled></div></td>
                    </tr>
                  </table>
                  <br>
                  <div class="panel-body navbar-right"><button type="submit" class="btn btn-warning">Editar perfil</button></div>
              <?= form_close(); ?>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
