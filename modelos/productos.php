<?php
class producto extends conectar{
    public function Obtener_Prod()
    {
        $conectar = parent::conexion();
        $sql = "SELECT * FROM t_productos";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function Obtener_Prod_por_id($prod_id)
    {
        $conectar = parent::conexion();
        $sql = "SELECT * FROM t_productos WHERE = id_prod = $prod_id";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function borrar_Prod($prod_id ,$nom_prod, $cantidad, $proveedor)
    {
        $conectar = parent::conexion();
        $sql = "UPDATE t_productos set nom_prod = $nom_prod, cantidad = $cantidad, proveedor = $proveedor, estado= 0 WHERE id_prod = $prod_id ";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insertar_Prod($nom_prod, $cantidad, $proveedor)
    {
        $conectar = parent::conexion();
        $sql = "INSERT INTO t_productos (id_prod, nom_prod, fecha_prod, cantidad, proveedor, estado) VALUES (NULL, '$nom_prod', current_timestamp(), '$cantidad', '$proveedor', 'asdas');";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function modificar_Prod($prod_id ,$nom_prod, $cantidad, $proveedor)
    {
        $conectar = parent::conexion();
        $sql = "UPDATE t_productos set nom_prod = $nom_prod, cantidad = $cantidad, proveedor = $proveedor WHERE id_prod = $prod_id ";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}

?>