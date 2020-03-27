<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

    mysqli_query($conexion, "update SaocoDance set Nombre='$_REQUEST[Nombrenuevo]' where Nombre='$_REQUEST[Nombreviejo]'") or

    die("Problemas en el select:" . mysqli_error($conexion));

    echo "El nombre fue modificado con exito";
    

    ?>

</body>

</html>