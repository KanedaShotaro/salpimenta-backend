<?php

Block::test();
$codigoReceta = $_POST["id"];
$valor = $_POST["value"];

$codigoUsuario = $_SESSION["usuario"][0]->getCodigoUsuario();
$usuarioBd = new UsuarioBd();
$recetaBd = new RecetaBd();
$usuarioBd->valoracionRecetaUsuario($codigoReceta, $codigoUsuario, $valor);
$recetaBd->actualizarValoracion($codigoReceta);




