<!--Incluir Menu-->
<?php include "Menu.php" ?>

<?php include("Conexion_BD/Base_De_Datos.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "SELECT * FROM conductor WHERE id = $id";
    $ResultadoConductorActualizar = mysqli_query($Conn, $query);

    if (mysqli_num_rows($ResultadoConductorActualizar) == 1) {
        $row = mysqli_fetch_array($ResultadoConductorActualizar);
        $idconductor = $row['id'];
        $licenciaconductor = $row['licencia'];
        $categoriaconductor = $row['categoria'];
        $observacionesconductor = $row['observaciones'];
    }
}

if (isset($_POST['BotonActualizarConductor'])) {
    $id = $_GET['id'];
    $licenciaconductor = $row['ActualizarLicencia'];
    $categoriaconductor = $row['ActualizarCategoria'];
    $observacionesconductor = $row['ActualizarObservaciones'];

    $query = "UPDATE conductor set id = '$idconductor'  WHERE licencia = '$licencia'";
    mysqli_query($Conn, $query);
    // header ("location: Mostrar_Usuario.php");

}
?>
<html lang="es">
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 - mx-auto">
            <div class="card card-bosy">
                <form action="Actualizar_Conductor.php?id=<?php echo $_GET['licencia'];  ?>" METHOD="POST">
                    <div class="form-group">
                        <input type="text" name="ActualizarLicencia" value="<?php echo $licenciaconductor; ?>" class="form-control" placeholder="Actualice el Id por favor">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ActualizarCategoria" value="<?php echo $idconductor; ?>" class="form-control" placeholder="Actualice el Nombre por favor" rows="2">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ActualizarObservaciones" value="<?php echo $idconductor; ?>" class="form-control" placeholder="Actualice el Nombre por favor" rows="2">
                    </div>
                    <button type="submit" class="btn btn-dark" name="BotonActualizarConductor">
                        Actualizar
                    </button>
            </div>
            </form>
        </div>

    </div>
</div>
</div>