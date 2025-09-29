<?php

include 'conexao1.php';

$cpf = $_POST["txt_cpf"];
$nome  = $_POST["txt_nome"];
$datanasc = $_POST["datasnasc"];
$endereco = $_POST["txt_endereco"];
$comp = $_POST["txt_comp"];
$bairro = $_POST["txt_bairro"];
$cidade = $_POST["txt_cidade"];
$uf =   $_POST["txt_uf"];
$contato = $_POST{"txt_contato"};
$email = $_POST["txt_email"];

$sql = mysql_query("SELECT * FROM tb_clientes
                    WHERE cpf = '$cpf' OR email = '$email'");

if (mysql_num_rows($sql) > 0) {
    echo "<center>";
    echo "<hr>";
    echo "CONTA EXISTENTE!!";
    echo "<hr>";
    echo "<br>";
} else {
    $sql = mysql_query("INSERT INTO tb_clientes (cpf,nome,datanasc,endereco, comp, bairro, cidade, uf, contato, email)
VALUES ('$cpf', '$nome', '$datanasc', '$endereco', '$comp','$bairro', '$cidade', '$uf', '$contato', '$email')");

    echo "<center>";
    echo "<hr>";
    echo "CONTA CRIADA COM SUCESSO!!";
    echo "<hr>";
}

?>
