<?php
  require_once("../config/conexion.php");
  require_once("../modelos/productos.php");

  $productos = new producto();

  $nombre = $_POST["nom_producto"];
  $cantidad = $_POST["cantidad"];
  $proveedor = $_POST["proveedor"];
  
  $productos->insertar_Prod($nombre, $cantidad, $proveedor);

  $datos = array('insertado' => true);
  
  echo json_encode($datos);
?>