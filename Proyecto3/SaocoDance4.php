<html>
<head>
    <title>Problema</title>
</head>
<body> 
    <?php

        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "select Nombre,Apellido,Edad,Apodo,Sexualidad,Horario,Cedula from SaocoDance where Nombre='$_REQUEST[Nombre]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
            echo "Nombre:" . $reg['Nombre'] . "<br>";
            echo "Apellido:" . $reg['Apellido']. "<br>";
            echo "Edad:" . $reg['Edad']. "<br>";
            echo "Apodo:". $reg['Apodo']. "<br>";
            echo "Sexualidad:". $reg['Sexualidad']. "<br>";
            echo "Horario:". $reg['Horario']. "<br>";
            echo "Cedula:". $reg['Cedula']. "<br>";
        } 
       else {
            echo "No existe bailarin con ese nombre.";
        }

        mysqli_close($conexion); ?> </body>

</html>