<?php
include 'conexao.php'; 


$N_Registros     = $_POST["N_Registros"];
$Nome_Func       = $_POST["Nome_Func"];
$data_admissao   = $_POST["data_admissao"];
$cargo           = $_POST["cargo"];
$quant_salarios  = $_POST["quant_salarios"];

$salario_bruto   = $quant_salarios * 1412;
$inss            = $salario_bruto * 0.11;



if($salario_bruto >= 1550){
$salario_liquido = $salario_bruto - $inss;
} else {
    $salario_liquido = $salario_bruto;
    $inss            = 0;


}

$sql = mysqli_query($conn, "SELECT * FROM tb_funcionarios 
                            WHERE Nome_Func = '$Nome_Func' 
                            OR N_Registros = '$N_Registros'");

if (mysqli_num_rows($sql) > 0) {
    echo "<center><hr>FUNCIONÁRIO JÁ EXISTE!<hr></center>";
 
} else {
    $insert = mysqli_query($conn, "INSERT INTO tb_funcionarios 
        (N_Registros, Nome_Func, data_admissao, cargo, quant_salarios, salario_bruto, inss, salario_liquido)
        VALUES ('$N_Registros', '$Nome_Func', '$data_admissao', '$cargo', '$quant_salarios', '$salario_bruto', '$inss', '$salario_liquido')");


    if ($insert) {
        echo "<center><hr>FUNCIONÁRIO CADASTRADO COM SUCESSO!<hr></center>";
      
    } else {
        echo "<center><hr>ERRO AO CADASTRAR: " . mysqli_error($conn) . "<hr></center>";
       
    }
}
?>
