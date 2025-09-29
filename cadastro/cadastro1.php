<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Clientes</title>
        <style type="text/css">
            @import url("estilo.css");
         </style>
    </head>
 
<body>
<form  name = "form1" method = "post">

<fieldset>
<center> <legend> <h1>CADASTRO DE CLIENTES</h1></legend> </center>
CPF: <br>
<input id="caixa" type="text" name = "txt_cpf" size = "30"> <br>
NOME: <br>
<input id="caixa" type="text" name = "txt_nome" size = "30"> <br>
DATA NASCIMENTO: <br>
<input id="caixa" type="date" name = "datasnasc" value = "dd-mm-aaaa" size = "30"> <br>
ENDEREÇO: <br>
<input id="caixa" type="text" name = "txt_endereco" size = "30"> <br>
COMPLEMENTO: <br>
<input id="caixa" type="text" name = "txt_comp" size = "30"> <br>
BAIRRO: <br>
<input id="caixa" type="text" name = "txt_bairro" size = "30"> <br>
CIDADE: <br>
<inpuT id="caixa" type="text" name = "txt_cidade" size = "30"> <br>
UF: <br>
<input id="caixa" type="text" name = "txt_uf" size = "30"> <br>
CONTATO: <br>
<input id="caixa" type="text" name = "txt_contato" size = "30"> <br>
E-MAIL: <br>
<input id="caixa" type="text" name = "txt_email" size = "30"> <br> <br>


<center> 
<input id= "botao"type= "submit" name = "bt_incluir" value = "Enviar Dados" onClick =  "document.form1.action='cadastrar1.php'">
</center>

</fieldset>
</form>    
</body>
</html>