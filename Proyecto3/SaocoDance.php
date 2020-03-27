<html>
<html>
<head>
    <title>Problema</title>
</head>
<body> 
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");
        mysqli_query($conexion, "insert into SaocoDance(Nombre,Apellido,Edad,Apodo,Sexualidad,Horario,Cedula) values
('$_REQUEST[Nombre]','$_REQUEST[Apellido]',$_REQUEST[Edad],'$_REQUEST[TShirt]','$_REQUEST[Sexo]','$_REQUEST[horario]',$_REQUEST[id])")
            or die("Problemas en el select" . mysqli_error($conexion));
        mysqli_close($conexion);
        echo "El Bailarin Fue Inscrito Con Exito!!.";
        ?>

</body>

</html>