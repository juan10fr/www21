<?php        
// Recoge el identificador de la empresa seleccionada y enviada mediante método POST
$id = $_POST['codigo'];
// Invocamos el archivo con la conexión a la base de datos
require_once('marcosup.php');
if (mysqli_query($c, "DELETE FROM cliente WHERE id_cliente='$id'")) {
    // Si ejecuta correctamente la sentencia de borrado, redirige a la página de Gestión
    echo '<script>window.location.href = "gestioncliente.php";</script>';
} else {
    echo "No puedo borrar debido a una restricción de clave foránea.";
    echo '<a href="clientesgestion.php" class="close">Volver...</a>';
}
?>



