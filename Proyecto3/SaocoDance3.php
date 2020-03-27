<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");
    $registros = mysqli_query($conexion, "select * from SaocoDance where Nombre='$_REQUEST[Nombre]'") 
    or die("Problemas en el select:" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {

    ?>
        <form action="SaocoDance3-2.php" method="post">
            Ingrese Nuevo Nombre:
            <input type="text" name="Nombrenuevo" value="<?php echo $reg['Nombre'] ?>">
            <br>
            <input type="hidden" name="Nombreviejo" value="<?php echo $reg['Nombre'] ?>">
            <input type="submit" value="Modificar">
        </form>
    <?php
    } else
        echo "No existe alumno con dicho mail";
    ?>
</body>
</html>