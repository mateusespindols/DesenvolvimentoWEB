<?php
//comentario
$servidor = "127.0.0.1";
$usuario  = "root";
$senha = "usbw";
$banco = "folha_pagto";

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}










?>
