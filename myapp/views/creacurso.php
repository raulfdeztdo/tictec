<div class="container" style="width: 70%; margin: 5% 15% 0 15% ; background-color: #E7E7E7">
   <div class="signup-form-container">
        <!-- form start -->
        <?= validation_errors('<div class="errors">','</div><br>'); ?>
        <?= form_open(base_url().'Cursos/creacurso'); ?>
        <div class="form-header">
         <h3 class="form-title"><i class="fa fa-plus-circle"></i> Nuevo curso</h3>
         <?php print $_SESSION['logged_in']['group']; ?>
       </div><br>
        <div class="form-body">
           <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                  <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre del curso" required>
                  </div>
                  <span class="help-block" id="error"></span>
             </div>
             <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
                  <input name="precio" type="number" class="form-control" placeholder="Precio" required>
                  </div>
                  <span class="help-block" id="error"></span>
             </div>
             <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
                  <input name="fecha_ini" type="date" min="1900-01-01" max="<?php print date("Y-m-d"); ?>" class="form-control">
                  </div>
                  <span class="help-block" id="error"></span>
             </div>
             <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
                 <select class="form-control" name="categoria" id="categoria">
                     <option value="frontend" selected>Frontend</option>
                     <option value="backend">Backend</option>
                     <option value="office">Office</option>
                 </select>
              </div>
             </div>
             <div class="form-group">
               <textarea class="form-control" name="descripcion" rows="5" id="descripcion" placeholder="Descripcion del curso (400 caracteres)" style="resize: vertical"></textarea>
             </div>
             <div class="form-group">
               <div class="input-group">
                  <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                      Buscar
                      <input data-url="/upload" accept="image/jpeg" name="image" type="file" id="image">
                    </span>
                  </span>
                  <input readonly="readonly" placeholder="Direccion de la imagen" class="form-control" id="imageValue" name="filename" type="text">
              </div>
             </div>
           </div>
           <br><p>*Tenga en cuenta que una vez subido el curso nuestro administradores deberan revisarlo para comprobar que cumple los requisitos de profesionalidad.</p><br><br>
           <div class="form-footer">
                <center><button type="button" name="enviardatos" id="enviardatos" class="btn btn-info">
                Subir curso
              </button></center>

           </div>
           <?= form_close(); ?>
          </div>
</div>

</body>
</html>
