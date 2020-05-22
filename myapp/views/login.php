<div style="background: #0C3045 !important; margin-top:50px" class="jumbotron">
  <div class="container text-center" style="color: #5C5D5D; margin: 0 10% 0 10%; width:90%">
    <div class="row">
      <div class="col-md-5">
        <div class="panel-group">
          <div class="panel panel-default" style="text-align: center; align-content: center">
            <div class="panel-heading"><h2>Entra en Tic Tec</h2></div>
            <div class="panel-body">Entra en tu cuenta de usuario para poder realizar los mejores cursos del mercado<br>¿A qué estas esperando?</div>
            <div class="panel-body">
              <?= validation_errors('<div class="errors">','</div><br>'); ?>
              <?= form_open(base_url().'Auth/login'); ?>
                  <div class="input-group" style="margin:0 10% 0 15%">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="user" type="text" class="form-control" name="user" placeholder="Usuario" style="width: 90%" required>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password_auth" type="password" minlength="6" class="form-control" name="password_auth" placeholder="Contraseña" style="width: 90%" required>
                  </div>
                  <div class="panel-body navbar-right"><button type="submit" class="btn btn-primary">Entrar</button>&nbsp; &nbsp; &nbsp; &nbsp;<a href="<?php echo base_url().'User/registro' ?>" class="btn btn-info" >Registrate</a></div>
              <?= form_close(); ?>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-5">
        <img src="<?= asset_url('img/mockup2.png') ?>"  alt="Mockup2" width="50%" height="50%" >
      </div>
    </div>
  </div>
</div>
