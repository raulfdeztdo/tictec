<div class="container" style="width: 30%; margin: 10% 35% 0 35% ; background-color: #E7E7E7">
   <div class="signup-form-container">
        <!-- form start -->

        <?= form_open(base_url().'User/registro'); ?>
        <div class="form-header">
         <h3 class="form-title"><i class="fa fa-user"></i> Registro</h3>
       </div><br>
        <div class="form-body">
           <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                  <input name="usuario" id="usuario" type="text" class="form-control" placeholder="Usuario" required>
                  </div>
                  <span class="help-block" id="error"></span>
             </div>
             <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                  <input name="email" type="text" class="form-control" placeholder="Email" required>
                  </div>
                  <span class="help-block" id="error"></span>
             </div>
             <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
                  <input name="fecha_nac" type="date" min="1900-01-01" max="<?php print date("Y-m-d"); ?>" class="form-control">
                  </div>
                  <span class="help-block" id="error"></span>
             </div>
             <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                 <select class="form-control" name="group" id="group">
                     <option value="1" selected>Estudiante</option>
                     <option value="2">Profesor</option>
                 </select>
              </div>
             </div>
             <div class="row">
                  <div class="form-group col-lg-6">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                       <input name="password" id="password" minlength="6" type="password" class="form-control" placeholder="Contraseña" required>
                       </div>
                       <span class="help-block" id="error"></span>
                  </div>
                  <div class="form-group col-lg-6">
                       <div class="input-group">
                       <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                       <input name="password2" id="password2" minlength="6" type="password" class="form-control" placeholder="Repite contraseña" required>
                       </div>
                       <span class="help-block" id="error"></span>
                  </div>
            </div><center>
              <?= validation_errors('<div class="errors">','</div><br>'); ?>
            <span id="errContraseñas" class="alert-danger" style="display: none; border: 1px solid; border-radius: 8px; padding: 5px;">Las contraseñas deben ser iguales y de 6 caracteres minimo</span>
            </center><br><br>
           </div>
           <div class="form-footer">
                <center><button type="button" name="registro" id="registro" class="btn btn-info">
                <span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Enviar datos !
              </button></center>
           </div>
           <?= form_close(); ?>

          </div>
</div>

</body>
</html>
