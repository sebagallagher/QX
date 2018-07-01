<div class="login-box">

  <div class="login-logo">

    <img src="vistas/img/plantilla/Log.png" class="img-responsive"
    style="padding:20px 80px 0px 80px">
  
  </div>
  <!-- /.login-logo -->


  <div class="login-box-body">

    <p class="login-box-msg">Ingresa al Sistema</p>

    <!-- FORMULARIO --> 
    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="IngUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      
      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="IngPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>

      <div class="row">
        
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
       
        </div>
        
      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();

      ?>

    </form>

</div>
