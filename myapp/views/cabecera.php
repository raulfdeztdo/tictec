<header>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img src="<?= asset_url('img/logo-cabecera.jpg')?>"  alt="TicTecLogo" width="120px" height="50px">
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <?php if ($activo == "inicio") { ?>
          <li class="active"><a href="<?php echo base_url().'Inicio/index' ?>">Inicio</a></li>
          <li><a href="<?php echo base_url().'Cursos/categorias' ?>">Categorias</a></li>
          <li><a href="<?php echo base_url().'Otros/nosotros' ?>">Nosotros</a></li>
          <li><a href="<?php echo base_url().'Otros/contacto' ?>">Contacto</a></li>
        <?php } ?>
        <?php if ($activo == "categorias") { ?>
          <li><a href="<?php echo base_url().'Inicio/index' ?>">Inicio</a></li>
          <li class="active"><a href="<?php echo base_url().'Cursos/categorias' ?>">Categorias</a></li>
          <li><a href="<?php echo base_url().'Otros/nosotros' ?>">Nosotros</a></li>
          <li><a href="<?php echo base_url().'Otros/contacto' ?>">Contacto</a></li>
        <?php } ?>
        <?php if ($activo == "nosotros") { ?>
          <li><a href="<?php echo base_url().'Inicio/index' ?>">Inicio</a></li>
          <li><a href="<?php echo base_url().'Cursos/categorias' ?>">Categorias</a></li>
          <li class="active"><a href="<?php echo base_url().'Otros/nosotros' ?>">Nosotros</a></li>
          <li><a href="<?php echo base_url().'Otros/contacto' ?>">Contacto</a></li>
        <?php } ?>
        <?php if ($activo == "contacto") { ?>
          <li><a href="<?php echo base_url().'Inicio/index' ?>">Inicio</a></li>
          <li><a href="<?php echo base_url().'Cursos/categorias' ?>">Categorias</a></li>
          <li><a href="<?php echo base_url().'Otros/nosotros' ?>">Nosotros</a></li>
          <li class="active"><a href="<?php echo base_url().'Otros/contacto' ?>">Contacto</a></li>
        <?php } ?>
        <?php if ($activo == "registro") { ?>
          <li><a href="<?php echo base_url().'Inicio/index' ?>">Inicio</a></li>
          <li><a href="<?php echo base_url().'Cursos/categorias' ?>">Categorias</a></li>
          <li><a href="<?php echo base_url().'Otros/nosotros' ?>">Nosotros</a></li>
          <li><a href="<?php echo base_url().'Otros/contacto' ?>">Contacto</a></li>
        <?php } ?>
        </ul>

        <?= form_open(base_url().'Auth/logout'); ?>
        <div class="navbar-form navbar-right">
          <?php if (isset($_SESSION['logged_in'])) { ?>
            <?php if ($_SESSION['logged_in']['group'] == "Profesor") { ?>
              <a href="<?php echo base_url().'Cursos/creacurso' ?>" class="btn btn-danger" >Subir curso</a>&nbsp;&nbsp;
            <?php } ?>
            <a href="<?php echo base_url().'User/miperfil' ?>" class="btn btn-primary" >Mi perfil</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary" >Salir</button>&nbsp;&nbsp;
          <?php } else { ?>
            <a href="<?php echo base_url().'User/registro' ?>" class="btn btn-info" >Registrate</a>&nbsp;&nbsp;
          <?php } ?>
       </div>
       <?= form_close(); ?>
     </div>
    </div>
  </nav>
</header>
<body>
