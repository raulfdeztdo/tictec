<body>
        <div style="background: #67A553 !important; margin-top:30px" class="jumbotron">
          <div class="container text-center" style="color: #5C5D5D; margin: 0 10% 0 10%; width:90%">
            <div class="row">
              <div class="col-md-5" style="margin-top: 5%">
                <div style="color: white">
                  <h2><?php print $data_curso['nombre']; ?></h2>
                  <p style="color: #DEDEDE"><?php print $data_curso['descripcion']; ?></p>
                  <p style="color: #DEDEDE">Fecha de subida: <?php print $data_curso['fecha_ini']; ?></p>
                  <p style="color: #DEDEDE">Creado por: <?php print $data_curso['creadopor']; ?></p>
                  <p style="color: #DEDEDE">Precio: <font style="font-weight: bold; color: #1E540C; border: 1px solid #1E540C; border-radius: 10px; background-color: #95EB79; padding: 5px"> <?php print $data_curso['precio']; ?>€</font></p>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <img src="<?= asset_url($data_curso['imagen']) ?>"  alt="Logo curso" width="40%" height="40%" style="border-radius: 12px; margin: 10% 0 10%">
              </div>
            </div>
          </div>
        </div>
