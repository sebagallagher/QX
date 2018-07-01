
<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administrar Usuarios

    </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>

        <li class="active">Administrar Usuarios</li>

      </ol>

 </section>

    <section class="content">

      <div class="box">
        
         <div class="box-header with-border">

           <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          
           Agregar usuario

          </button>

        </div>
        
        <div class="box-body">

           <table class="table table-bordered table-striped dt-responsive tablas">

             <thead>

               <tr>

                 <th>#</th>
                 <th>Nombre</th>
                 <th>Usuario</th>
                 <th>Foto</th>
                 <th>Perfil</th>
                 <th>Estado</th>
                 <th>Último acceso</th>
                 <th>Acciones</th>
                 
              </tr>

            </thead>

            <tbody>

              <tr>

                 <th>1</th>
                 <th>Usuario Aministrador</th>
                 <th>admin</th>
                 <th>Foto</th>
                 <th>Administrador</th>
                 <th><button class="btn btn-success btn-xs" >Activado</button></th>
                 <th>2018-06-03 12:05:32</th>
                 <th>

                   <div class="btn-group">

                     <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                     <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                     
                  </div>

                 </th>
                 
              </tr>

            </tbody>

          </table>

        </div>

      </div>
      
    </section>    

</div>

<!-- VENTANA MODAL PARA REGISTRO DE USUARIOS AL SISTEMA-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!-- MODAL HEADER-->

        <div class="modal-header" style="background:#00a65a; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Usuario</h4>

        </div>

        <!-- MODAL BODY-->
      
        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-xs" name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="text" class="form-control input-xs" name="nuevoUsuario" placeholder="Ingresar usuario" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="password" class="form-control input-xs" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-xs" name="nuevoPerfil">

                  <option value="">Seleccionar Perfil</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Especial</option>
                  
                  <option value="OFA">Oficial Administrativo</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SUBIR FOTO -->

            <div class="form-group">

              <div class="panel">SUBIR FOTO</div>

              <input type="file" id="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 10 MB</p>

              <img src="vistas/img/plantilla/default.png" class="img-thumbnail" width="100px">
      
            </div>

          </div>

        </div>

        <!-- MODAL FOOTER-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type=submit class="btn btn-primary">Guardar Usuario</button>

        </div>

      </form>

    </div>

  </div>

</div>










