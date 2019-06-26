<form id="actualidarDatos" action="../controlador/c_empresa.php" method="post">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- MODAL HEADER-->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!--MODAL BODY -->
      <div class="modal-body">
        <div id="datos_ajax"></div>
          <div class="row form-group">
            <div class="col col-md-3">
            <label for="" class="form-control-label">RUC Empresa:</label></div>
            <div class="col-12 col-md-9">
            <input type="text" class="form-control" id="ruc" name="txtruc" required maxlength="45"></div>
            <input type="hidden" class="form-control" id="id" name="id">
          </div>
        <div class="row form-group">
              <div class="col col-md-3">
              <label for="" class="form-control-label">Nombre Empresa:</label></div>
              <div class="col-12 col-md-9">
              <input type="text" class="form-control" id="nombre" name="txtempresa" required maxlength="45"></div>
            </div>
        <div class="row form-group">
              <div class="col col-md-3">
              <label for="" class="form-control-label">Email Contacto:</label></div>
              <div class="col-12 col-md-9">
              <input type="text" class="form-control" id="email" name="txtemail" required maxlength="10"></div>
            </div> 
        <div class="row form-group">
              <div class="col col-md-3">
              <label for="" class="form-control-label">Telefono Contacto:</label></div>
              <div class="col-12 col-md-9">
              <input type="text" class="form-control" id="phone" name="txttelef" required maxlength="10"></div>
            </div>        
      </div>

      <!--modal FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="update" id="update" >Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>