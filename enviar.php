<?php

function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

$anio = isset($_POST['anio']) ? (int) $_POST['anio'] : 0;
$name = isset($_POST['name']) ? Filtro($_POST['name']) : '';
$FechaNac = isset($_POST['FechaNac']) ? Filtro($_POST['FechaNac']) : '';
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$Apellido = isset($_POST['Apellido']) ? Filtro($_POST['Apellido']) : '';
$correo = isset($_POST['correo']) ? Filtro($_POST['correo']) : '';
$color = isset($_POST['color']) ? Filtro($_POST['color']) : '';
$urlP = isset($_POST['urlP']) ? Filtro($_POST['urlP']) : '';


$error = '';
?>