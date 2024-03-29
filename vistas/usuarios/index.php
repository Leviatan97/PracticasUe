<!DOCTYPE html>
<html lang="es" >

<head>

  <meta charset="UTF-8">
  <title>Uniempresarial | Practicas</title>
  
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="shortcut icon" href="../../img/practicas_ico.png" />

</head>

<body>
	<div class="container col-xl-12 col-sm-12 col-lg-12 col-md-12" style="background-color: #0E2B4A;">
		<div class="row">
			<div class="mt-2">
			<img src="../../img/logo1.png" >
			</div>
		</div><br>
	</div>

  <div class="row mt-3 col-xl-12 col-sm-12 col-lg-12 col-md-12">
      
      <aside class="menu">
        <ul>
          <li><div class="icons"><i class="fa fa-home"></div></i><div class="linktitle" ><a href="#" style="color: #fff;">Inicio</a></div></li>
          <li><div class="icons"><i class="fa fa-user"></i></div><div class="linktitle"><a href="#" style="color: #fff;">Mi perfil</a></div></li>
          <li><div class="icons"><i class="fa fa-group"></i></div><div class="linktitle"><a href="#" style="color: #fff;">Ciclo Empresarial</a></div></li>
          <li><div class="icons"><i class="fa fa-calendar"></i></div><div class="linktitle"><a href="#" style="color: #fff;">Calendario</a></div></li>
        </ul>
      </aside>
      <div class="centrado col-xl-9 col-sm-9 col-lg-9 col-md-9 col-9">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-9">
          <a href="Registrar_usuario.php"><input type="button" name="crearuser" class="btn btn-outline-success registro" value="Registrar Usuario"></a>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 scroll">
          <?php
            include_once("../../ldatos/conexionbd.php");
            include_once("../../llogica/RegistrarUsuario.php");
            $objVista = new Usuario(1,1,1,1,1,1,1,1);
            $objVista->mostrartodo();
          ?>
          <!-- <table class="table tabla">
            <thead class="thead-blue">
              <tr>
                <th>Tipo de documento</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Estado</th>
                <th></th>
              </tr>
              <tr>
                <th><select class="form-control">
                      <option>Seleccione</option>
                      <option>Cedula de Ciudadania</option>
                      <option>Tarjeta de Identidad</option>
                      <option>Cedula Extragera</option>
                      <option>Otro</option>
                    </select>
                </th>
                <th><input type="number" name="" class="form-control"></th>
                <th><input type="text" name="" class="form-control"></th>
                <th><select class="form-control">
                      <option>Seleccione</option>
                      <option>Administrador</option>
                      <option>Estudiante</option>
                      <option>Administrativos</option>
                      <option>Profesor</option>
                    </select>
                </th>
                <th>Estado</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cedula de Ciudadania</td>
                <td>1073248765</td>
                <td>Juan Sebastian Ortegon Pineda</td>
                <td>Administrador</td>
                <td><input type="button" name="crearuser" class="btn btn-outline-success" value="Activo"></td>
                <td><input type="button" name="crearuser" class="btn btn-outline-info" value="Editar"></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Tipo de documento</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Estado</th>
                <th></th>
              </tr>
            </tfoot>
          </table> -->
        </div>
      </div>
      <!-- Floating Social Media bar Starts -->
      <div class="float-sm">
        <div class="fl-fl float-fb">
          <a class="fa fa-facebook" href="https://www.facebook.com/uniempresarial"></a>
        </div>
        <div class="fl-fl float-tw">
          <a class="fa fa-twitter" href="https://twitter.com/uempresarial"></a>
        </div>
        <div class="fl-fl float-ig">
          <a class="fa fa-instagram" href="https://www.instagram.com/uniempresarial/"></a>
        </div>
        <div class="fl-fl float-pn">
          <a class="fa fa-flickr" href="https://www.flickr.com/photos/140197501@N05/albums"></a>
        </div>
      </div>
</div>


  <!-- Floating Social Media bar Ends -->


  <hr style="border-color: #0E2B4A;">
   <div class="row centrado col-xl-12 col-sm-12 col-lg-12 col-md-12">
   		<div class="mt-2 col-xl-3 col-md-3 col-sm-12 ">
			   <img src="../../img/logo_ccb.png" class="img-aling">
			</div>
    	<div class="row col-xl-9 col-md-9 col-sm-12">
    		 <footer>
    		 	
    		 	<p class="info">Todos los derechos reservados © 2019 Fundación Universitaria de la Cámara de Comercio de Bogotá Uniempresarial | Términos, politicas y Condiciones de Servicio Resolución 598 del Ministerio de Educación. Registro Icfes 2738. - Administrador web: webadmin@uniempresarial.edu.co </p>
    		 </footer>
		  </div>
	</div>

</body>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
<!-- 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</html>
