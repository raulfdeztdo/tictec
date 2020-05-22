<div class="container" style="width: 50%; margin: 5% 25% 0 25% ; background-color: #E7E7E7">
   <div class="signup-form-container">
        <!-- form start -->
        <?= form_open(base_url().'Cursos/compracurso'); ?>
        <input type="hidden" name="id_curso_compra" id="id_curso_compra" value="<?php print $data_curso['id_curso']; ?>">
        <input type="hidden" name="id_user" id="id_user" value="<?php print $_SESSION['logged_in']['id']; ?>">
        <div class="form-header">
         <h3 class="form-title"><i class="glyphicon glyphicon-shopping-cart"></i> Compra del curso de <?php print $data_curso['nombre']; ?></h3>
       </div><br>
       <div class="panel panel-default" style="border-radius: 12px">
            <div class="panel-heading">Detalles de la compra</div>
            <div class="panel-body">
            <p><?php print $data_curso['descripcion']; ?></p>
            <p>Categoria: <?php print $data_curso['categoria']; ?></p>
            <p>Precio: <?php print $data_curso['precio']; ?>€</p>
            <p>Profesor: <?php print $data_curso['creadopor']; ?></p>
          </div>
          </div><br>
        <div class="form-footer">
            <center><input type="button" name="compra" id="compra" class="btn btn-info" value="Comprar"></center>
        </div>
          <?= form_close(); ?>
          </div>
</div>

</body>
</html>
