<div style="background: #0C3045 !important; margin-top:50px" class="jumbotron">
  <div class="container text-center" style="color: #5C5D5D; margin: 0 10% 0 10%; width:90%">
    <div class="row">
      <div class="col-md-5">
        <div class="panel-group">
          <div class="panel panel-default" style="text-align: center; align-content: center">
            <div class="panel-heading"><h2>Hola <?php print $_SESSION['logged_in']['nombre']; ?> , bienvenido a Tic Tec! </h2></div>
            <div class="panel-body">Puedes realizar cualquier curso que quieres entrando en las categorias para ver los cursos disponibles<br><a href="<?php echo base_url().'Cursos/categorias' ?>" class="btn btn-primary" >Categorias</a></div>
            <div class="panel-body">O puedes continuar algun cursos que estes realizando actualmente entrando en tu perfil<br><a href="<?php echo base_url().'User/miperfil' ?>" class="btn btn-primary" >Mi perfil</a></div><br>
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
