
<html>
    <body>
    
        <h1>Emilio 22100230</h1>
        <meta charset="utf-8"/>
        <form action="insertar_almacenista.php" method="post">
            Nombre: <input type="text" name="Nombre"><br>
            apellido: <input type="text" name="apellido"><br>
            fecha de nacimiento: <input type="date" name="fec_nac"><br>
            
            inventario:
            <select name="inventario">
                <option value="0">Seleccione:</option>
                    <?php
                     $mysqli = new mysqli('localhost', 'root', '', 'integrador') or die("Fallo en la Conexion");
                     $query = $mysqli -> query ("SELECT id_inv, nombre_inv FROM inventario");
                     while ($valores = mysqli_fetch_array($query)) {
                     echo '<option value="'.$valores['id_inv'].'">'.$valores['nombre_inv'].'</option>';
                     }
                    ?>
            </select><br>

            Nombre de usuario: <input type="text" name="usr"><br>

            contraseña: <input type="text" name="pass"><br>


            <input type="submit" value="agregar">

        </form>

        <?php
           echo "<a href='/administradores/menuA.php?'><button>regresar</button></a> ";
           ?>


    </body>
</html>
