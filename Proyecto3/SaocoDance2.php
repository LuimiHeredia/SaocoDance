<html>

<head>
    <title>Problema</title>
</head>

<body> <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "select Nombre from SaocoDance where Nombre='$_REQUEST[Nombre]'") or die("Problemas en el select:" . mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registros)) {

            mysqli_query($conexion, "delete from SaocoDance where Nombre='$_REQUEST[Nombre]'") or

                die("Problemas en el select:" . mysqli_error($conexion));

            echo "Se borro el antiguo bailarin.";
        } else {
            echo "No existe un bailarin llamado asi.";
        }

        mysqli_close($conexion);

        ?>

</body>

</html>