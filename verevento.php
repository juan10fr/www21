﻿<?php 
require_once('marcosup.php');

?>

<div class="py-2 bg-dark" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;  height: 600px;">
    <div class="row py-3 bg-dark text-info"> 		
        <div class="col-1">
        </div>
        <div class="col-10">
            <br><h1>Ver datos de Eventos</h1>
            <a href="gestionevento.php" class="close">    
                Volver...
            </a>
            <?php
                // Obtener el ID del cliente seleccionado mediante el formulario
                $ID = $_POST['codigo'];
		
                // Busca los datos del usuario seleccionado
                $sentencia="select * from evento where id_evento=$ID";

                // Recopilar las filas almacenadas en la tabla
                $resultado=mysqli_query($c,$sentencia);

                // Verificar si hay registros en la tabla
                if(mysqli_num_rows($resultado) > 0) {

                    // Recorremos $resultado mostrando cada fila de la tabla
                    while ($registro = mysqli_fetch_row($resultado)){
                        // Construimos la entrada para cada fila de la tabla
                        echo '<div class="col-md-8 col-sm-8">';
                        echo "<table class='table text-info'> ";
                            echo "<tr><td class='text-right text-warning'>ID: </td><td><h5>",$registro[0],"</h5></td></tr>";
                            echo "<tr><td class='text-right text-warning'>NOMBRE: </td><td><h5>",$registro[1],"</h5></td></tr>";
                            echo "<tr><td class='text-right text-warning'>FECHA_DE_INICIO: </td><td><h5>",$registro[2],"</h5></td></tr>";
                            echo "<tr><td class='text-right text-warning'>FECHA_DE_FIN: </td><td><h5>",$registro[3],"</h5></td></tr>";
                            echo "<tr><td class='text-right text-warning'>DIRECCION:  </td><td><h5>",$registro[4],"</h5></td></tr>";
                        echo "</table>";
                        echo '</div>';					
                    }
                } else {
                    // Si no hay registros en la tabla, mostrar mensaje de error
                    echo "<p>No se encontraron registros.</p>";
                }

                // Muestra la sentencia de inserción que va a ejecutar
                //echo "<br>Sentencia:", $sentencia;

                // Cerramos la conexión con la base de datos
                mysqli_close($c);
            ?>
        </div>
    </div>
</div>
<?php
    //Cargar el marco inferior
    require_once('marcoinf.php');
    // Fin del código PHP
?>
