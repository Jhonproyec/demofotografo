<?php

define('RUTA', 'http://localhost/fotografo/');

// CONEXION A LA BASE DE DATOS
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'fotografo'
);
if(!$conn){
  echo 'Error de la conexion a la base de datos';
}

// CONFIGURACION PARA LA FECHA
function fecha($fecha){
  $timestamp = strtotime($fecha);
  $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
  $dia = date('d', $timestamp);
  $mes = date('m', $timestamp) -1;
  $year = date('Y', $timestamp);

  $fecha = "$dia de ".$meses[$mes]." del $year";
  return $fecha;
}

?>