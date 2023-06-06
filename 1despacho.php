<?php
// Iniciamos código PHP
// Cargar el marco superior
require_once('marcosup.php');

// Comprobamos si la llamada de acceso viene con errores dede 1control.php
if(isset($_GET['errorusuario'])){
    // Muestra el mensaje rojo de error
    echo '<h3 class="bg-none" style="height:90px; width:250px; position:absolute; right:80px; bottom:350px; background-color:red; color:white; text-align:center;"> Datos incorrectos,<br> vuelva a intentarlo. </h3>' ;
}
?>
<div class="py-5 bg-none" style="height:100%; width:100%; position:absolute; right:0px; top:20px; background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8)); background-position: top left; background-size: 100%; background-repeat: repeat;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center text-danger" style="color: black; font-weight: bold;">Acceso al sistema como usuario registrado</h1>
      </div>
    </div>
    <div class="text-center row">
      <div class="col-md-3">          
      </div>   
      <div class="col-md-6  text-danger">
        <form action="1control.php" method="POST">   
          <hr>
          <h3 class="display-5 text-center" style="color: black; font-weight: bold;">
            <i class="bi bi-person-bounding-box"> Usuario</i>
            <input type="Text" name="usuario" value="admin" size="30" maxlength="50">
          </h3>
          <hr>
          <h3 class="display-5 text-center" style="color: black; font-weight: bold;">
            <i class="bi bi-upc-scan"> Contraseña</i>
            <input type="password" name="llave" value="admin123" size="30" maxlength="50">
          </h3>                
          <hr>
          <input type="Submit" class="btn btn-success" value="ENTRAR"> - 
          <input type="reset"  class="btn btn-warning" value="BORRAR">
        </form>
      </div>
      <div class="col-md-3">          
      </div>   
    </div>
  </div>
</div>

<?php
// Iniciamos código PHP
// Cargar el marco inferior
require_once('marcoinf.php');
// Fin del código PHP
?>
