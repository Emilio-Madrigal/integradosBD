<html>
<body>
    <?php

        include "conexion.php";

        // Recibir datos del formulario
        $nombre = $_REQUEST['Nombre'];
        $precio = $_REQUEST['precio'];
        $caducidad = $_REQUEST['caducidad'];
        $marca = $_REQUEST['marca'];
        $inventario = $_REQUEST['inventario'];
        $proveedor = $_REQUEST['proveedor'];
        $cantidad = $_REQUEST['cantidad'];

        // Mostrar los datos para verificar
        print("Nombre es: $nombre<br>");
        print("Precio es: $precio<br>");
        print("Caducidad es: $caducidad<br>");
        print("Marca es: $marca<br>");
        print("Inventario es: $inventario<br>");
        print("Proveedor es: $proveedor<br>");

        // Insertar datos en la tabla
        $sql = "INSERT INTO producto (nombre, cantidad, precio, caducidad, id_marca,id_inv , id_prov)
                VALUES ('$nombre','$cantidad', '$precio', '$caducidad', '$inventario', '$marca', '$proveedor')";

        if ($conexion->query($sql) === TRUE) {
            echo "Nuevo registro creado exitosamente.<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        echo "<a href='producto.php?'><button>regresar</button></a> ";

        $conexion->close();
    ?>
</body>
</html>
