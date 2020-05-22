<body>

        <div style="background: #488096 !important; margin-top:30px" class="jumbotron">
          <div class="container text-center" style="color: #5C5D5D; margin: 0 10% 0 10%; width:90%">
            <div class="row">
              <div class="col-md-5" style="margin-top: 5%">
                <div style="color: white">
                  <h2>Descuebre nuestras categorias</h2>
                  <p style="color: #DEDEDE">En esta sección podrás por categorias los cursos que mas te interese, y segun tus preferencias podrás elegir el que más te convenga</p>
                </div>
              </div>
              <div class="col-md-2"></div>
              <div class="col-md-5">
                <img src="<?= asset_url('img/mockup8.png') ?>"  alt="Mockup8">
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid bg-3 text-center" style="width: 70%">
          <h3>Categorias</h3>
          <br>
          <div class="row">
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <img src="<?= asset_url('img/frontend-logo.png') ?>"  alt="Logo0"  width="200px" height="200px" style="border-radius: 12px;">
                </div>
                <div class="panel-body">
                  <a href="<?php echo base_url().'Cursos/frontend' ?>"><input type="button" name="frontend" class="btn btn-info" value="FrontEnd"></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <img src="<?= asset_url('img/backend-logo.png') ?>"  alt="Logo1" width="200px" height="200px" style="border-radius: 12px;">
                </div>
                <div class="panel-body">
                  <a href="<?php echo base_url().'Cursos/backend' ?>"><input type="button" name="backend" class="btn btn-info" value="BackEnd"></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <img src="<?= asset_url('img/office-logo.jpg') ?>"  alt="Logo2" width="200px" height="200px" style="border-radius: 12px;">
                </div>
                <div class="panel-body">
                 <a href="<?php echo base_url().'Cursos/office' ?>"><input type="button" name="office" class="btn btn-info" value="Paquete Office"></a> 
                </div>
              </div>
            </div>
          </div>
        </div>

  </body>
</html>
