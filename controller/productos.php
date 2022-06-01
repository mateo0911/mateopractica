<?php
    require_once("../config/conexion.php");
    require_once("../modelos/productos.php");

    $productos = new producto();
    $resultado = $productos->Obtener_Prod();

    var_dump($resultado);



    ?>
        <!-- <table> -->
            <!-- <thead>
                <th>ID</th>
                <th>NOMBRE PRODUCTO</th>
                <th>FECHA INGRESO</th>
                <th>CANTIDAD DISPONIBLE</th>
                <th>PROVEEDOR</th>
                <th>ESTADO</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </thead>
            <tbody>
                <?php
                    foreach ($resultado as $row) {
                        ?>
                        <tr>
                            <td><?php echo $row["id_prod"];?></td>
                            <td><?php echo $row["nom_prod"];?></td>
                            <td><?php echo $row["fecha_prod"];?></td>
                            <td><?php echo $row["cantidad"];?></td>
                            <td><?php echo $row["proveedor"];?></td>
                            <td><?php echo $row["estado"];?></td>
                        </tr>
                  <?php } ?>
                
            </tbody>
        </table>
     
        
     } -->
