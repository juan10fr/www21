<?php
################################################
#### Menú Principal #
#
#
function principal()
{
echo '
        <ul class="navbar-nav ml-auto text-light">
          <li class="nav-item text-white"> <a class="nav-link" href="index-b.php">Inicio</a> </li>
          
          

           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Altas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="AltaClientes.php">Alta-Clientes</a>
              <a class="dropdown-item" href="AltaEventos.php">Alta-Eventos</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gestion</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="gestioncliente.php">Gestion Cliente</a>
              <a class="dropdown-item" href="gestionevento.php">Gestion Evento</a>
            </div>
          </li>


          <li class="nav-item"> <a class="nav-link" href="servicios.php"></a> </li>
          <li class="nav-item"> <a class="nav-link" href="ayuda.php"></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"></a> </li>          
          <li class="nav-item"> <a class="nav-link" href="salir.php">SALIR</a> </li>
        </ul>
          ';
		 
}
################################################
?>
